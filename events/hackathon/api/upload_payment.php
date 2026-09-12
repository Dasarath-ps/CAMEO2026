<?php
/**
 * Upload a manual payment screenshot for a pending Nexyra registration.
 *
 * The uploaded file is renamed to a random server-side filename.
 * Only JPG, JPEG, PNG and WEBP images are accepted.
 */
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') { http_response_code(200); exit; }
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['message' => 'Method Not Allowed']);
    exit;
}

require_once __DIR__ . '/../config/db.php';

$registrationId = isset($_POST['registration_id']) ? (int)$_POST['registration_id'] : 0;
if ($registrationId <= 0) {
    http_response_code(400);
    echo json_encode(['message' => 'Invalid registration ID.']);
    exit;
}

if (!isset($_FILES['payment_screenshot']) || $_FILES['payment_screenshot']['error'] !== UPLOAD_ERR_OK) {
    http_response_code(400);
    echo json_encode(['message' => 'Please upload your payment screenshot.']);
    exit;
}

$file = $_FILES['payment_screenshot'];
$maxSize = 5 * 1024 * 1024; // 5 MB
if ($file['size'] <= 0 || $file['size'] > $maxSize) {
    http_response_code(400);
    echo json_encode(['message' => 'Screenshot must be smaller than 5 MB.']);
    exit;
}

$allowed = [
    'image/jpeg' => 'jpg',
    'image/png'  => 'png',
    'image/webp' => 'webp'
];

$finfo = new finfo(FILEINFO_MIME_TYPE);
$mime = $finfo->file($file['tmp_name']);
if (!isset($allowed[$mime])) {
    http_response_code(400);
    echo json_encode(['message' => 'Only JPG, PNG or WEBP screenshots are allowed.']);
    exit;
}

try {
    $pdo = getDbConnection();

    $stmt = $pdo->prepare("SELECT id, team_size, amount, payment_status, payment_screenshot FROM registrations WHERE id = ?");
    $stmt->execute([$registrationId]);
    $registration = $stmt->fetch();

    if (!$registration) {
        http_response_code(404);
        echo json_encode(['message' => 'Registration not found.']);
        exit;
    }

    if ((int)$registration['amount'] !== ((int)$registration['team_size'] * 200)) {
        http_response_code(400);
        echo json_encode(['message' => 'Registration fee data is invalid. Please contact the organizers.']);
        exit;
    }

    if ($registration['payment_status'] === 'paid') {
        http_response_code(409);
        echo json_encode(['message' => 'This registration has already been marked as paid.']);
        exit;
    }

    $uploadDir = dirname(__DIR__) . '/uploads/payment_screenshots';
    if (!is_dir($uploadDir) && !mkdir($uploadDir, 0755, true)) {
        throw new RuntimeException('Could not create upload directory.');
    }

    $filename = 'payment_' . $registrationId . '_' . bin2hex(random_bytes(12)) . '.' . $allowed[$mime];
    $destination = $uploadDir . DIRECTORY_SEPARATOR . $filename;

    if (!move_uploaded_file($file['tmp_name'], $destination)) {
        throw new RuntimeException('Could not save the screenshot.');
    }

    // Delete an older screenshot for this registration after the new file is safely stored.
    if (!empty($registration['payment_screenshot'])) {
        $old = dirname(__DIR__) . '/' . ltrim($registration['payment_screenshot'], '/\\');
        if (is_file($old)) @unlink($old);
    }

    $relativePath = 'uploads/payment_screenshots/' . $filename;
    $update = $pdo->prepare("UPDATE registrations SET payment_screenshot = ?, payment_status = 'pending' WHERE id = ?");
    $update->execute([$relativePath, $registrationId]);

    echo json_encode([
        'success' => true,
        'message' => 'Payment screenshot uploaded successfully. Your payment will be verified by the organizers.',
        'registration_id' => $registrationId
    ]);
} catch (Throwable $e) {
    http_response_code(500);
    echo json_encode(['message' => 'Could not upload screenshot: ' . $e->getMessage()]);
}
