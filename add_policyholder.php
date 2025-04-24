<html>
<head>
    <title>Add Policyholder</title>
</head>
<body>
    <h1>Add Policyholder</h1>
    <form action="add_policyholder.php" method="POST">
        Full Name: <input type="text" name="fullname" required><br>
        Email: <input type="email" name="email" required><br>
        Phone No: <input type="text" name="phone_no" required><br>
        Address: <textarea name="address" required></textarea><br>
        <button type="submit">Add Policyholder</button>
    </form>
</body>
</html>
