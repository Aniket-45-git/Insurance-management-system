<?php
include 'db.php';

if (isset($_GET['id'])) {
    $payment_id = $_GET['id'];

    
    $query = "SELECT * FROM payments WHERE payment_id = :payment_id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':payment_id', $payment_id, PDO::PARAM_INT);
    $stmt->execute();
    $payment = $stmt->fetch(PDO::FETCH_ASSOC);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $policyholder_id = $_POST['policyholder_id'];
    $amount = $_POST['amount'];
    $payment_method = $_POST['payment_method'];
    $payment_date = $_POST['payment_date'];

    
    $query = "UPDATE payments SET policyholder_id = :policyholder_id, amount = :amount, payment_method = :payment_method, payment_date = :payment_date WHERE payment_id = :payment_id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':payment_id', $payment_id, PDO::PARAM_INT);
    $stmt->bindParam(':policyholder_id', $policyholder_id);
    $stmt->bindParam(':amount', $amount);
    $stmt->bindParam(':payment_method', $payment_method);
    $stmt->bindParam(':payment_date', $payment_date);
    $stmt->execute();

    
    header("Location: manage_payments.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Payment</title>
</head>
<body>

    <h2>Edit Payment</h2>
    <form method="POST">
        <label>Policyholder ID:</label>
        <input type="number" name="policyholder_id" value="<?php echo $payment['policyholder_id']; ?>" required>
        <br>
        <label>Amount:</label>
        <input type="number" name="amount" value="<?php echo $payment['amount']; ?>" step="0.01" required>
        <br>
        <label>Payment Method:</label>
        <select name="payment_method" required>
            <option value="card" <?php echo $payment['payment_method'] == 'card' ? 'selected' : ''; ?>>Card</option>
            <option value="cash" <?php echo $payment['payment_method'] == 'cash' ? 'selected' : ''; ?>>Cash</option>
            <option value="bank_transfer" <?php echo $payment['payment_method'] == 'bank_transfer' ? 'selected' : ''; ?>>Bank Transfer</option>
        </select>
        <br>
        <label>Payment Date:</label>
        <input type="date" name="payment_date" value="<?php echo $payment['payment_date']; ?>" required>
        <br>
        <button type="submit">Update Payment</button>
    </form>

</body>
</html>
