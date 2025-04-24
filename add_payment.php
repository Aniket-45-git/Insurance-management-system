<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $policyholder_id = $_POST['policyholder_id'];
    $amount = $_POST['amount'];
    $payment_method = $_POST['payment_method'];
    $payment_date = $_POST['payment_date'];

    
    $query = "INSERT INTO payments (policyholder_id, amount, payment_method, payment_date) VALUES (:policyholder_id, :amount, :payment_method, :payment_date)";
    $stmt = $pdo->prepare($query);
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
    <title>Add Payment</title>
</head>
<body>

    <h2>Add New Payment</h2>
    <form method="POST">
        <label>Policyholder ID:</label>
        <input type="number" name="policyholder_id" required>
        <br>
        <label>Amount:</label>
        <input type="number" name="amount" step="0.01" required>
        <br>
        <label>Payment Method:</label>
        <select name="payment_method" required>
            <option value="card">Card</option>
            <option value="cash">Cash</option>
            <option value="bank_transfer">Bank Transfer</option>
        </select>
        <br>
        <label>Payment Date:</label>
        <input type="date" name="payment_date" required>
        <br>
        <button type="submit">Add Payment</button>
    </form>

</body>
</html>
