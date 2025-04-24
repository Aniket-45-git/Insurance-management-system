<?php
include 'db.php';

if (isset($_GET['id'])) {
    $payment_id = $_GET['id'];

    
    $query = "DELETE FROM payments WHERE payment_id = :payment_id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':payment_id', $payment_id, PDO::PARAM_INT);
    $stmt->execute();

    
    header("Location: manage_payments.php");
    exit;
}
?>
