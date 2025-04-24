<?php
require_once 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM policyholders WHERE id = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$id]);
    $policyholder = $stmt->fetch(PDO::FETCH_ASSOC);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $address = $_POST['address'];

    
    $query = "UPDATE policyholders SET fullname = ?, email = ?, phone_no = ?, address = ? WHERE id = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$fullname, $email, $phone_no, $address, $id]);

   
    header("Location: manage_policyholders.php");
    exit();
}
?>

<html>
<head>
    <title>Edit Policyholder</title>
</head>
<body>
    <h1>Edit Policyholder</h1>
    <form action="edit_policyholder.php?id=<?php echo $id; ?>" method="POST">
        Full Name: <input type="text" name="fullname" value="<?php echo $policyholder['fullname']; ?>" required><br>
        Email: <input type="email" name="email" value="<?php echo $policyholder['email']; ?>" required><br>
        Phone No: <input type="text" name="phone_no" value="<?php echo $policyholder['phone_no']; ?>" required><br>
        Address: <textarea name="address" required><?php echo $policyholder['address']; ?></textarea><br>
        <button type="submit">Update Policyholder</button>
    </form>
</body>
</html>
