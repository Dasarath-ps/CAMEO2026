<?php
header('Content-Type: application/json; charset=utf-8');
require_once __DIR__ . '/../config/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    http_response_code(405);
    echo json_encode(['message' => 'Method Not Allowed']);
    exit;
}

try {
    $pdo = getDbConnection();
    $stmt = $pdo->query("SELECT id, team_name, leader_name, email, phone, college, theme, team_size,
        member2, member3, member4, amount, payment_status, payment_screenshot,
        created_at, paid_at
        FROM registrations ORDER BY id DESC");
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC), JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['message' => 'Failed to fetch registrations: ' . $e->getMessage()]);
}
