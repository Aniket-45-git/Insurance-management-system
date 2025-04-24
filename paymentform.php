<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "assurance_management_system";


$conn = new mysqli($host, $user, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$defaultPolicyholderID = "";

$sql = "SELECT id FROM policyholders ORDER BY id DESC LIMIT 1"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $defaultPolicyholderID = $row["id"];
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Payment</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        .payment-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        h2 {
            color: #4CAF50;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            margin-top: 10px;
        }
        button:hover {
            background-color: #45a049;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
        }
        .download-btn {
            background-color: #007BFF;
            color: white;
            padding: 10px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin-top: 10px;
        }
        .download-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="payment-container">
    <h2>Card Payment</h2>

    <div id="payment-form">
        <input type="text" id="policyholder_id" value="<?= $defaultPolicyholderID; ?>" placeholder="Policyholder ID" required readonly>
        <input type="text" id="amount" placeholder="Enter amount" required>
        <input type="text" id="card_number" placeholder="Card Number" required>
        <input type="text" id="card_expiry" placeholder="MM/YY" required>
        <input type="text" id="card_cvc" placeholder="CVC" required>
        <button onclick="processPayment()">Make Payment</button>
    </div>

    <div id="success-message" class="success" style="display: none;">
        ✅ Your policy has been successfully activated! <br>
        <button onclick="downloadReceipt()" class="download-btn">Download Receipt</button>
    </div>
</div>

<script>
    function processPayment() {
        let policyholderId = document.getElementById("policyholder_id").value;
        let amount = document.getElementById("amount").value;
        let cardNumber = document.getElementById("card_number").value;
        let cardExpiry = document.getElementById("card_expiry").value;
        let cardCVC = document.getElementById("card_cvc").value;

        if (!policyholderId || !amount || !cardNumber || !cardExpiry || !cardCVC) {
            alert("Please fill all fields.");
            return;
        }

        
        let paymentDetails = {
            policyholderId: policyholderId,
            amount: amount,
            paymentMethod: "Card Payment",
            paymentDate: new Date().toLocaleString()
        };

        
        localStorage.setItem("latestPayment", JSON.stringify(paymentDetails));

        
        document.getElementById("payment-form").style.display = "none";
        document.getElementById("success-message").style.display = "block";
    }

    function downloadReceipt() {
        let paymentDetails = JSON.parse(localStorage.getItem("latestPayment"));
        if (!paymentDetails) {
            alert("No payment record found!");
            return;
        }

        const { jsPDF } = window.jspdf;
        let doc = new jsPDF();

        doc.setFontSize(18);
        doc.text("Payment Receipt", 80, 20);
        doc.setFontSize(12);
        doc.text("Policyholder ID: " + paymentDetails.policyholderId, 20, 40);
        doc.text("Amount Paid: $" + paymentDetails.amount, 20, 50);
        doc.text("Payment Method: " + paymentDetails.paymentMethod, 20, 60);
        doc.text("Payment Date: " + paymentDetails.paymentDate, 20, 70);
        doc.text("Thank you for your payment!", 20, 90);

        doc.save("Payment_Receipt.pdf");

        alert("Receipt downloaded! Redirecting to home page...");

        setTimeout(function () {
            window.location.href = "homepage.php";  
        }, 3000);
    }
</script>

</body>
</html>
