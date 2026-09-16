<?php
session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: admin.php');
    exit;
}

require_once 'config/db.php';

$pdo = getDbConnection();
$error = '';
$success = '';

if (!isset($_GET['id'])) {
    header('Location: admin_dashboard.php');
    exit;
}

$id = $_GET['id'];

// Handle Form Submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $team_name = $_POST['team_name'] ?? '';
    $leader_name = $_POST['leader_name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $college = $_POST['college'] ?? '';
    $theme = $_POST['theme'] ?? '';
    $team_size = $_POST['team_size'] ?? 2;
    $member2 = $_POST['member2'] ?? '';
    $member3 = $_POST['member3'] ?? '';
    $member4 = $_POST['member4'] ?? '';

    if (empty($team_name) || empty($leader_name) || empty($email) || empty($phone) || empty($college) || empty($theme)) {
        $error = "Please fill in all required fields.";
    } else {
        try {
            $stmt = $pdo->prepare("
                UPDATE registrations 
                SET team_name = ?, leader_name = ?, email = ?, phone = ?, college = ?, theme = ?, team_size = ?, member2 = ?, member3 = ?, member4 = ?
                WHERE id = ?
            ");
            $stmt->execute([
                $team_name, $leader_name, $email, $phone, $college, $theme, $team_size, $member2, $member3, $member4, $id
            ]);
            $success = "Registration updated successfully.";
        } catch (Exception $e) {
            $error = "Failed to update registration: " . $e->getMessage();
        }
    }
}

// Fetch current data
$stmt = $pdo->prepare("SELECT * FROM registrations WHERE id = ?");
$stmt->execute([$id]);
$reg = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$reg) {
    die("Registration not found.");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Registration #REQ-<?= str_pad($reg['id'], 3, '0', STR_PAD_LEFT) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Rajdhani:wght@500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-base: #050507;
            --surface: rgba(18, 18, 24, 0.6);
            --border: rgba(255, 255, 255, 0.08);
            --accent: #6366f1;
            --text-main: #f8fafc;
            --text-muted: #94a3b8;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            background-color: var(--bg-base);
            color: var(--text-main);
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            padding: 40px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 40px;
        }

        h1 {
            font-family: 'Rajdhani', sans-serif;
            font-size: 2.5rem;
            margin-bottom: 30px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        input, select {
            width: 100%;
            padding: 12px;
            background: rgba(0,0,0,0.3);
            border: 1px solid var(--border);
            border-radius: 8px;
            color: white;
            font-family: inherit;
        }
        
        input:focus, select:focus {
            outline: none;
            border-color: var(--accent);
        }

        .row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .actions {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        button, .btn {
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
            border: none;
        }

        .btn-primary {
            background: var(--accent);
            color: white;
            flex: 1;
        }

        .btn-secondary {
            background: rgba(255,255,255,0.1);
            color: white;
            flex: 1;
        }

        .alert {
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .alert-success { background: rgba(16, 185, 129, 0.2); color: #10b981; border: 1px solid #10b981; }
        .alert-danger { background: rgba(239, 68, 68, 0.2); color: #ef4444; border: 1px solid #ef4444; }

    </style>
</head>
<body>

<div class="container">
    <h1>Edit Registration #REQ-<?= str_pad($reg['id'], 3, '0', STR_PAD_LEFT) ?></h1>
    
    <?php if ($error): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
    <?php if ($success): ?>
        <div class="alert alert-success"><?= htmlspecialchars($success) ?></div>
    <?php endif; ?>

    <form method="POST">
        <div class="row">
            <div class="form-group">
                <label>Team Name *</label>
                <input type="text" name="team_name" value="<?= htmlspecialchars($reg['team_name']) ?>" required>
            </div>
            <div class="form-group">
                <label>Institution / College *</label>
                <input type="text" name="college" value="<?= htmlspecialchars($reg['college']) ?>" required>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <label>Contact Email *</label>
                <input type="email" name="email" value="<?= htmlspecialchars($reg['email']) ?>" required>
            </div>
            <div class="form-group">
                <label>Contact Phone *</label>
                <input type="text" name="phone" value="<?= htmlspecialchars($reg['phone']) ?>" required>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <label>Theme / Topic *</label>
                <select name="theme" required>
                    <option value="Retail & E-Commerce" <?= $reg['theme'] === 'Retail & E-Commerce' ? 'selected' : '' ?>>Retail & E-Commerce</option>
                    <option value="Climate & Energy" <?= $reg['theme'] === 'Climate & Energy' ? 'selected' : '' ?>>Climate & Energy</option>
                    <option value="Education & Workforce" <?= $reg['theme'] === 'Education & Workforce' ? 'selected' : '' ?>>Education & Workforce</option>
                </select>
            </div>
            <div class="form-group">
                <label>Team Size</label>
                <select name="team_size" id="team_size" required>
                    <option value="2" <?= $reg['team_size'] == 2 ? 'selected' : '' ?>>2 Participants</option>
                    <option value="3" <?= $reg['team_size'] == 3 ? 'selected' : '' ?>>3 Participants</option>
                    <option value="4" <?= $reg['team_size'] == 4 ? 'selected' : '' ?>>4 Participants</option>
                </select>
            </div>
        </div>

        <h3 style="margin: 20px 0 10px; font-family: 'Rajdhani', sans-serif;">Team Members</h3>
        <div class="row">
            <div class="form-group">
                <label>Leader Name *</label>
                <input type="text" name="leader_name" value="<?= htmlspecialchars($reg['leader_name']) ?>" required>
            </div>
            <div class="form-group">
                <label>Member 2 *</label>
                <input type="text" name="member2" value="<?= htmlspecialchars($reg['member2']) ?>" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label>Member 3</label>
                <input type="text" name="member3" id="member3" value="<?= htmlspecialchars($reg['member3'] ?? '') ?>">
            </div>
            <div class="form-group">
                <label>Member 4</label>
                <input type="text" name="member4" id="member4" value="<?= htmlspecialchars($reg['member4'] ?? '') ?>">
            </div>
        </div>

        <div class="actions">
            <a href="admin_dashboard.php" class="btn btn-secondary">Back to Dashboard</a>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
    </form>
</div>

<script>
    const teamSize = document.getElementById('team_size');
    const member3 = document.getElementById('member3');
    const member4 = document.getElementById('member4');

    function updateFields() {
        const size = parseInt(teamSize.value, 10);
        member3.disabled = size < 3;
        if(size < 3) member3.value = '';
        member4.disabled = size < 4;
        if(size < 4) member4.value = '';
    }

    teamSize.addEventListener('change', updateFields);
    updateFields();
</script>
</body>
</html>
