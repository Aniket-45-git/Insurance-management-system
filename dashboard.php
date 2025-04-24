<?php

session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}


$totalUsers = 120;  
$totalPolicies = 50;  
$pendingApplications = 10;  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Insurance Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="admin-container">
        <header class="admin-header">
            <h1>Insurance Management System - Admin Panel</h1>
            <nav>
                <a href="dashboard.php">Dashboard</a>
                <a href="policies.php">Manage Policies</a>
                <a href="users.php">Manage Users</a>
                <a href="logout.php">Logout</a>
            </nav>
        </header>

        <main>
            <section class="admin-dashboard">
                <h2>Welcome, Admin!</h2>
                <div class="admin-stats">
                    <div class="stat-card">
                        <h3>Total Users</h3>
                        <p><?php echo $totalUsers; ?></p>
                    </div>
                    <div class="stat-card">
                        <h3>Total Policies</h3>
                        <p><?php echo $totalPolicies; ?></p>
                    </div>
                    <div class="stat-card">
                        <h3>Pending Applications</h3>
                        <p><?php echo $pendingApplications; ?></p>
                    </div>
                </div>
            </section>
        </main>
    </div>

</body>
</html>
