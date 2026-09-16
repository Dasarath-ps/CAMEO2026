<?php
session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: admin.php');
    exit;
}

require_once 'config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;

    if ($id) {
        try {
            $pdo = getDbConnection();
            $stmt = $pdo->prepare("DELETE FROM registrations WHERE id = ?");
            $stmt->execute([$id]);
            
            // Optionally, one could delete the payment screenshot file from disk here if desired
            // For now, we just remove the database record
            
            $_SESSION['message'] = "Registration #REQ-" . str_pad($id, 3, '0', STR_PAD_LEFT) . " deleted successfully.";
        } catch (Exception $e) {
            $_SESSION['error'] = "Failed to delete registration: " . $e->getMessage();
        }
    }
}

header('Location: admin_dashboard.php');
exit;
