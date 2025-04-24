<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assurance_management_system"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $requester_name = htmlspecialchars($_POST['requesterName'] ?? '');
    $policy_number = htmlspecialchars($_POST['policyNumber'] ?? '');
    $request_type = htmlspecialchars($_POST['requestType'] ?? '');
    $details = htmlspecialchars($_POST['details'] ?? '');

    
    if (!empty($requester_name) && !empty($policy_number) && !empty($request_type) && !empty($details)) {
        
        $stmt = $conn->prepare("INSERT INTO service_requests (requester_name, policy_number, request_type, details) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $requester_name, $policy_number, $request_type, $details);

        if ($stmt->execute()) {
            echo "<script>alert('Service request submitted successfully!');</script>";
        } else {
            echo "<script>alert('Error: " . $stmt->error . "');</script>";
        }

        $stmt->close();
    } else {
        echo "<script>alert('Error: All fields are required!');</script>";
    }
}


$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Request</title>
    <style>
        body {
            background-image: url("img\ for\ form2.jpg");
            background-size: cover;
        }
        .form-container {
            max-width: 500px; 
            margin: 0 auto; 
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.564);
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        label {
            display: block;
            color: white;
            margin: 10px 0 5px;
        }
        input[type="text"], input[type="date"], textarea, select {
            width: 100%;
            padding: 8px; 
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        textarea {
            height: 100px; 
        }
        input[type="submit"] { 
            background-color: #4CAF50;
            color: white; 
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        h2 {
            color: wheat;
        }
        .home-button {
            background-color: #007bff;
            text-decoration: none;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            margin-top: 20px;
            display: block;
            width: 100%;
        }
        .home-button:hover {
            background-color:rgb(54, 83, 113);
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Service Request</h2>
        <form id="serviceRequestForm" method="POST" action="serviceRequest.php">
            <label for="requesterName">Requester Name:</label>
            <input type="text" id="requesterName" name="requesterName" required>

            <label for="policyNumber">Policy Number:</label>
            <input type="text" id="policyNumber" name="policyNumber" required>

            <label for="requestType">Request Type:</label>
            <select id="requestType" name="requestType" required>
                <option value="claimStatus">Claim Status</option>
                <option value="policyUpdate">Policy Update</option>
                <option value="premiumPayment">Premium Payment</option>
                <option value="generalInquiry">General Inquiry</option>
            </select>

            <label for="details">Details:</label>
            <textarea id="details" name="details" required></textarea>

            <input type="submit" value="Submit Request">
        </form>

        
        <a href="homepage.php">
            <button class="home-button" on>Go to Home Page</button>
        </a>
    </div>
</body>
</html>

