<?php
/**
 * Create a pending Nexyra registration.
 * Fee is calculated server-side at ₹200 per participant.
 */
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') { http_response_code(200); exit; }
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['message' => 'Method Not Allowed']);
    exit;
}

require_once __DIR__ . '/../config/db.php';

$rawInput = file_get_contents('php://input');
$data = json_decode($rawInput, true);
if (!is_array($data) || empty($data)) $data = $_POST;

$required = ['team_name','leader_name','email','phone','college','theme','team_size','member2'];
foreach ($required as $field) {
    if (!isset($data[$field]) || trim((string)$data[$field]) === '') {
        http_response_code(400);
        echo json_encode(['message' => 'Please fill in all required fields.']);
        exit;
    }
}

if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['message' => 'Please enter a valid email address.']);
    exit;
}

$teamSize = (int)$data['team_size'];
if ($teamSize < 2 || $teamSize > 4) {
    http_response_code(400);
    echo json_encode(['message' => 'Team size must be 2, 3, or 4 participants.']);
    exit;
}

$amount = $teamSize * 200; // ₹200 per participant.

$member2 = trim((string)$data['member2']);
$member3 = isset($data['member3']) ? trim((string)$data['member3']) : '';
$member4 = isset($data['member4']) ? trim((string)$data['member4']) : '';

if ($teamSize >= 3 && $member3 === '') {
    http_response_code(400);
    echo json_encode(['message' => 'Please enter Member 3.']);
    exit;
}
if ($teamSize === 4 && $member4 === '') {
    http_response_code(400);
    echo json_encode(['message' => 'Please enter Member 4.']);
    exit;
}

try {
    $pdo = getDbConnection();

    $count = $pdo->query("SELECT COUNT(*) FROM registrations")->fetchColumn();
    if ($count >= MAX_REGISTRATIONS) {
        http_response_code(403);
        echo json_encode(['message' => 'Registration is currently full.']);
        exit;
    }

    $stmt = $pdo->prepare("INSERT INTO registrations
        (team_name, leader_name, email, phone, college, theme, team_size, member2, member3, member4, amount, payment_status, created_at)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'pending', ?)");

    $stmt->execute([
        trim((string)$data['team_name']),
        trim((string)$data['leader_name']),
        trim((string)$data['email']),
        trim((string)$data['phone']),
        trim((string)$data['college']),
        trim((string)$data['theme']),
        $teamSize,
        $member2,
        $member3 !== '' ? $member3 : null,
        $member4 !== '' ? $member4 : null,
        $amount,
        date('Y-m-d H:i:s')
    ]);

    $registrationId = (int)$pdo->lastInsertId();

    http_response_code(201);
    echo json_encode([
        'message' => 'Details saved. Continue to payment.',
        'registration_id' => $registrationId,
        'team_size' => $teamSize,
        'amount' => $amount,
        'amount_per_participant' => 200,
        'currency' => 'INR'
    ]);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['message' => 'Failed to save registration: ' . $e->getMessage()]);
}
