<?php
session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: admin.php');
    exit;
}

require_once 'config/db.php';

try {
    $pdo = getDbConnection();
    
    // Fetch all registrations
    $stmt = $pdo->query("SELECT * FROM registrations ORDER BY created_at DESC");
    $registrations = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Calculate stats
    $total_registrations = count($registrations);
    $total_revenue = 0;

    foreach ($registrations as $reg) {
        $total_revenue += (int)$reg['amount'];
    }

} catch (Exception $e) {
    die("Database error: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEXYRA - Admin Command Center</title>
    <!-- Fonts: Rajdhani for headings, Inter for data -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Rajdhani:wght@500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --bg-base: #050507;
            --surface: rgba(18, 18, 24, 0.6);
            --surface-hover: rgba(28, 28, 38, 0.8);
            --border: rgba(255, 255, 255, 0.08);
            --border-glow: rgba(99, 102, 241, 0.5);
            --accent: #6366f1;
            --accent-glow: rgba(99, 102, 241, 0.4);
            --text-main: #f8fafc;
            --text-muted: #94a3b8;
            --success: #10b981;
            --success-glow: rgba(16, 185, 129, 0.2);
            --warning: #f59e0b;
            --warning-glow: rgba(245, 158, 11, 0.2);
            --danger: #ef4444;
            --danger-glow: rgba(239, 68, 68, 0.2);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: var(--bg-base);
            background-image: 
                radial-gradient(circle at 15% 50%, rgba(99, 102, 241, 0.05), transparent 25%),
                radial-gradient(circle at 85% 30%, rgba(244, 63, 94, 0.03), transparent 25%);
            color: var(--text-main);
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            display: flex;
            overflow-x: hidden;
        }

        /* SIDEBAR */
        .sidebar {
            width: 280px;
            background: var(--surface);
            border-right: 1px solid var(--border);
            backdrop-filter: blur(20px);
            display: flex;
            flex-direction: column;
            padding: 30px 20px;
            position: fixed;
            height: 100vh;
            z-index: 50;
        }

        .brand {
            font-family: 'Rajdhani', sans-serif;
            font-size: 2rem;
            font-weight: 700;
            letter-spacing: 2px;
            color: white;
            margin-bottom: 50px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .brand span {
            color: var(--accent);
        }

        .nav-link {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px 20px;
            color: var(--text-muted);
            text-decoration: none;
            border-radius: 12px;
            font-weight: 500;
            transition: all 0.3s ease;
            margin-bottom: 10px;
        }

        .nav-link:hover, .nav-link.active {
            background: rgba(99, 102, 241, 0.1);
            color: var(--accent);
            box-shadow: inset 3px 0 0 var(--accent);
        }

        .logout-btn {
            margin-top: auto;
            background: rgba(239, 68, 68, 0.1);
            color: var(--danger);
            border: 1px solid var(--danger-glow);
            padding: 15px;
            text-align: center;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .logout-btn:hover {
            background: var(--danger);
            color: white;
            box-shadow: 0 0 20px var(--danger-glow);
        }

        /* MAIN CONTENT */
        .main-content {
            flex: 1;
            margin-left: 280px;
            padding: 40px 50px;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 40px;
        }

        .page-title h1 {
            font-family: 'Rajdhani', sans-serif;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .page-title p {
            color: var(--text-muted);
            font-size: 1rem;
        }

        /* STATS */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
            margin-bottom: 50px;
        }

        .stat-card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 25px;
            backdrop-filter: blur(10px);
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            border-color: var(--border-glow);
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; height: 3px;
            background: var(--accent);
            opacity: 0.5;
        }

        .stat-card:nth-child(2)::before { background: var(--success); }
        .stat-card:nth-child(3)::before { background: var(--warning); }
        .stat-card:nth-child(4)::before { background: var(--success); }

        .stat-title {
            color: var(--text-muted);
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .stat-value {
            font-family: 'Rajdhani', sans-serif;
            font-size: 3rem;
            font-weight: 700;
            line-height: 1;
        }

        /* DATA CARDS */
        .data-header {
            font-family: 'Rajdhani', sans-serif;
            font-size: 1.8rem;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .records-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(450px, 1fr));
            gap: 30px;
        }

        .record-card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 30px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .record-card:hover {
            background: var(--surface-hover);
            border-color: rgba(255,255,255,0.15);
            box-shadow: 0 15px 35px rgba(0,0,0,0.4);
            transform: translateY(-3px);
        }

        .rc-top {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding-bottom: 15px;
            border-bottom: 1px solid var(--border);
        }

        .team-info h2 {
            font-family: 'Rajdhani', sans-serif;
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 5px;
            color: white;
        }

        .team-id {
            font-family: monospace;
            color: var(--accent);
            background: var(--accent-glow);
            padding: 3px 8px;
            border-radius: 6px;
            font-size: 0.85rem;
            margin-right: 10px;
        }

        .team-theme {
            color: var(--text-muted);
            font-size: 0.95rem;
        }

        .status-badge {
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .status-paid { background: var(--success-glow); color: var(--success); border: 1px solid var(--success); }
        .status-pending { background: var(--warning-glow); color: var(--warning); border: 1px solid var(--warning); }
        .status-failed { background: var(--danger-glow); color: var(--danger); border: 1px solid var(--danger); }

        .rc-details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            font-size: 0.95rem;
        }

        .detail-item {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .d-label {
            color: var(--text-muted);
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .d-value {
            color: var(--text-main);
            font-weight: 500;
        }

        /* Team Members Block */
        .members-block {
            background: rgba(0,0,0,0.3);
            border: 1px solid rgba(255,255,255,0.05);
            border-radius: 12px;
            padding: 15px;
        }

        .members-title {
            color: var(--text-muted);
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 10px;
        }

        .members-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .member-pill {
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.1);
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            color: #cbd5e1;
            display: flex;
            align-items: center;
            gap: 6px;
        }
        
        .member-pill.leader {
            border-color: var(--accent);
            color: white;
        }

        .rc-footer {
            margin-top: auto;
            padding-top: 20px;
            border-top: 1px solid var(--border);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .financials {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .amt {
            font-family: 'Rajdhani', sans-serif;
            font-size: 1.4rem;
            font-weight: 700;
            color: white;
        }

        .date-info {
            font-size: 0.8rem;
            color: var(--text-muted);
        }

        .action-btn {
            background: var(--accent);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 500;
            font-size: 0.9rem;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.3s;
            box-shadow: 0 4px 15px var(--accent-glow);
        }

        .action-btn:hover {
            background: #4f46e5;
            transform: translateY(-2px);
        }

        .empty-state {
            grid-column: 1 / -1;
            text-align: center;
            padding: 80px 20px;
            background: var(--surface);
            border: 1px dashed var(--border);
            border-radius: 20px;
            color: var(--text-muted);
        }

        .receipt-preview {
            margin-top: 15px;
            background: rgba(0,0,0,0.3);
            border: 1px solid rgba(255,255,255,0.05);
            border-radius: 12px;
            padding: 10px;
        }

        .receipt-title {
            color: var(--text-muted);
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .receipt-preview img {
            width: 100%;
            height: 140px;
            object-fit: cover;
            border-radius: 8px;
            transition: all 0.3s ease;
            cursor: pointer;
            border: 1px solid rgba(255,255,255,0.1);
        }

        .receipt-preview img:hover {
            transform: scale(1.02);
            border-color: var(--accent);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .sidebar { width: 80px; padding: 30px 10px; }
            .brand span:last-child { display: none; }
            .nav-text { display: none; }
            .main-content { margin-left: 80px; padding: 30px; }
            .stats-grid { grid-template-columns: repeat(2, 1fr); }
        }

        @media (max-width: 768px) {
            .records-grid { grid-template-columns: 1fr; }
            .rc-details { grid-template-columns: 1fr; }
            .stats-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="brand">
            <span>NEX</span><span style="color:white;">YRA</span>
        </div>
        
        <a href="#" class="nav-link active">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
            <span class="nav-text">Dashboard</span>
        </a>
        
        <a href="logout.php" class="logout-btn">
            <span class="nav-text">Sign Out</span>
        </a>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <div class="page-header">
            <div class="page-title">
                <h1>Command Center</h1>
                <p>Real-time overview of hackathon registrations and revenue.</p>
            </div>
        </div>

        <!-- Statistics -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-title">Total Registrations</div>
                <div class="stat-value"><?= $total_registrations ?></div>
            </div>
            <div class="stat-card">
                <div class="stat-title">Total Revenue</div>
                <div class="stat-value" style="color: var(--success);">₹<?= number_format($total_revenue) ?></div>
            </div>
        </div>

        <!-- Data Section -->
        <h2 class="data-header">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
            Registration Database
        </h2>
        
        <div class="records-grid">
            <?php if (empty($registrations)): ?>
                <div class="empty-state">
                    <h3>No Data Available</h3>
                    <p>Registrations will appear here once submitted.</p>
                </div>
            <?php else: ?>
                <?php foreach ($registrations as $reg): ?>
                    <div class="record-card">
                        
                        <!-- Top: Name & Status -->
                        <div class="rc-top">
                            <div class="team-info">
                                <h2>
                                    <span class="team-id">#REQ-<?= str_pad($reg['id'], 3, '0', STR_PAD_LEFT) ?></span>
                                    <?= htmlspecialchars($reg['team_name']) ?>
                                </h2>
                                <div class="team-theme">Theme: <?= htmlspecialchars($reg['theme']) ?></div>
                            </div>
                            <span class="status-badge status-paid">
                                CONFIRMED
                            </span>
                        </div>

                        <!-- Details Grid -->
                        <div class="rc-details">
                            <div class="detail-item">
                                <span class="d-label">Contact Email</span>
                                <span class="d-value"><?= htmlspecialchars($reg['email']) ?></span>
                            </div>
                            <div class="detail-item">
                                <span class="d-label">Contact Phone</span>
                                <span class="d-value"><?= htmlspecialchars($reg['phone']) ?></span>
                            </div>
                            <div class="detail-item">
                                <span class="d-label">Institution</span>
                                <span class="d-value"><?= htmlspecialchars($reg['college']) ?></span>
                            </div>
                            <div class="detail-item">
                                <span class="d-label">Registered At</span>
                                <span class="d-value"><?= date('M j, Y - g:i A', strtotime($reg['created_at'])) ?></span>
                            </div>
                        </div>

                        <!-- Team Members Block -->
                        <div class="members-block">
                            <div class="members-title">Team Roster (<?= htmlspecialchars($reg['team_size']) ?> Members)</div>
                            <div class="members-list">
                                <div class="member-pill leader">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                                    <?= htmlspecialchars($reg['leader_name']) ?>
                                </div>
                                <?php if (!empty($reg['member2'])): ?>
                                    <div class="member-pill"><?= htmlspecialchars($reg['member2']) ?></div>
                                <?php endif; ?>
                                <?php if (!empty($reg['member3'])): ?>
                                    <div class="member-pill"><?= htmlspecialchars($reg['member3']) ?></div>
                                <?php endif; ?>
                                <?php if (!empty($reg['member4'])): ?>
                                    <div class="member-pill"><?= htmlspecialchars($reg['member4']) ?></div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Receipt Preview -->
                        <?php if (!empty($reg['payment_screenshot'])): ?>
                        <div class="receipt-preview">
                            <div class="receipt-title">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg>
                                Payment Receipt
                            </div>
                            <a href="<?= htmlspecialchars($reg['payment_screenshot']) ?>" target="_blank">
                                <img src="<?= htmlspecialchars($reg['payment_screenshot']) ?>" alt="Payment Screenshot">
                            </a>
                        </div>
                        <?php endif; ?>

                        <!-- Footer: Financials & Actions -->
                        <div class="rc-footer">
                            <div class="financials">
                                <span class="amt">₹<?= number_format($reg['amount']) ?></span>
                                <span class="date-info">Payment Received</span>
                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </main>

</body>
</html>