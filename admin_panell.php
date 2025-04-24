
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Insurance Management</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background: url('image for forms2.jpg');
            background-size: cover;
            display: flex;
            height: 100vh;
            color: #fff;
        }

        .sidebar {
            width: 250px;
            background: rgba(0, 0, 0, 0.8);
            padding: 20px;
            position: fixed;
            height: 100%;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background: #4CAF50;
        }

        .main-content {
            margin-left: 270px;
            padding: 20px;
            flex: 1;
        }

        .header {
            background: rgba(0, 0, 0, 0.87);
            padding: 15px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            border-radius: 10px;
        }

        .dashboard {
            display: flex;
            justify-content: space-around;
            margin-top: 30px;
        }

        .card {
            background: rgba(255, 255, 255, 0.5);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 200px;
        }

        .card i {
            font-size: 40px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <a href="dashboard.html"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="manage_policyholders.php"><i class="fas fa-users"></i> Manage Policyholders</a>
        <a href="pageformanagepolicy.php"><i class="fas fa-file-alt"></i> Manage Policies</a>
        <a href="manage_payments.php"><i class="fas fa-credit-card"></i> Manage Payments</a>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <div class="main-content">
        <div class="header">Welcome, Admin!</div>
        <div class="dashboard">
            <div class="card">
                <i class="fas fa-user"></i>
                <h3>Total Users</h3>
                <p>120</p>
            </div>
            <div class="card">
                <i class="fas fa-file-alt"></i>
                <h3>Total Policies</h3>
                <p>50</p>
            </div>
            <div class="card">
                <i class="fas fa-exclamation-circle"></i>
                <h3>Pending Applications</h3>
                <p>10</p>
            </div>
        </div>
    </div>
</body>
</html>
