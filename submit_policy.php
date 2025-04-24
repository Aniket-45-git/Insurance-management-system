<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $address = $_POST['address'];

    // Database connection
    include 'db.php';

    $query = "INSERT INTO policyholders (fullname, email, phone_no, address) VALUES (:fullname, :email, :phone_no, :address)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':fullname', $fullname);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone_no', $phone_no);
    $stmt->bindParam(':address', $address);

    if ($stmt->execute()) {
        // Send JSON response for success
        echo json_encode(["status" => "success", "message" => "Policy successfully registered."]);
    } else {
        echo json_encode(["status" => "error", "message" => "Something went wrong."]);
    }
}
?>
