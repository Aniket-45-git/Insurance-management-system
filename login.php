<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' && $password == 'admin123') {  
        $_SESSION['admin_logged_in'] = true;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Invalid credentials!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Insurance Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="admin-container">
        <header class="admin-header">
            <h1>Admin Login</h1>
        </header>

        <main>
            <section class="admin-login">
                <form method="POST">
                    <label for="username">Username:</label>
                    <input type="text" name="username" required>
                    <label for="password">Password:</label>
                    <input type="password" name="password" required>
                    <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
                    <button type="submit">Login</button>
                </form>
            </section>
        </main>
    </div>

</body>
</html>
