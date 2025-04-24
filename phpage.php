<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "assurance_management_system";


$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $phone_no = $_POST["phone_no"];
    $address = $_POST["address"];

    
    $stmt = $conn->prepare("INSERT INTO policyholders (fullname, email, phone_no, address) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $fullname, $email, $phone_no, $address);

    
    if ($stmt->execute()) {
        $message = "Policyholder registered successfully!";
    } else {
        $message = "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Policyholder Registration</title>
    <style>
        body {
            background-color: black;
        }
        .main {
            display: flex;
            width: 100%;
            height: 100vh;
            background-image: url("img for form2.jpg");
            background-size: cover;
            padding-left: 50px;
            flex-direction: column;
        }
        .form-container {
            margin-top: 2%;
            width: 400px;
            padding: 22px 20px;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
        }
        h2 {
            color: white;
            text-align: center;
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
            color: white;
            margin-left: 50px;
            display: block;
            margin-bottom: 5px;
        }
        input {
            width: 75%;
            height: 6%;
            padding: 6px;
            margin-left: 10%;
            border-radius: 10px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            width: 55%;
            margin-left: 22%;
            padding: 10px;
            border-radius: 5px;
        }
        .next-page-btn {
            background-color: #2196F3;
            color: white;
            border: none;
            width: 55%;
            margin-left: 22%;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            display: block;
            font-size: 16px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="form-container">
            <h2>Policyholder Registration</h2>
            <?php if (isset($message)) { echo "<p style='color: green; text-align: center;'>$message</p>"; } ?>
            <form action="" method="POST">
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" placeholder="Enter Full Name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter Email" required>

                <label for="phone_no">Phone Number:</label>
                <input type="text" id="phone_no" name="phone_no" placeholder="Enter Phone Number" required>

                <label for="address">Address:</label>
                <input type="text" id="address" name="address" placeholder="Enter Address" required>

                <input type="submit" value="Register">
            </form>

           
            <a href="policyselection.php" class="next-page-btn">Next Page</a>
        </div>
    </div>
</body>
</html>
