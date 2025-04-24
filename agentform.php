<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "assurance_management_system";

$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $agent_name = $conn->real_escape_string($_POST['agentName']);
    $agent_code = $conn->real_escape_string($_POST['agentCode']);
    $agent_email = $conn->real_escape_string($_POST['agentEmail']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $agency_name = $conn->real_escape_string($_POST['agencyName']);

    $sql = "INSERT INTO agents (agent_name, agent_code, agent_email, phone, agency_name) 
            VALUES ('$agent_name', '$agent_code', '$agent_email', '$phone', '$agency_name')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Agent Registered Successfully!'); window.location.href='agent_panel.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent Registration</title>
    <style>
        body { 
            font-family: Arial, sans-serif;
            background-image: url("img\ for\ form2.jpg");
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container { 
            display: flex;
            flex-direction: column;
            width: 350px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            padding: 20px 30px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            color: white;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #4CAF50;
        }

        label { 
            font-size: 14px;
            margin-bottom: 5px; 
        }

        input[type="text"], 
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            background-color: rgba(255, 255, 255, 0.9);
        }

        input:focus {
            border-color: #4CAF50;
            outline: none;
        }

        .button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            margin-top: 15px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            transition: 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
            transform: scale(1.05);
        }

        a {
            text-align: center;
            display: block;
            color: white;
            text-decoration: none;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Agent Registration</h2>
        <form method="POST">
            <label for="agentName">Agent Name:</label>
            <input type="text" id="agentName" name="agentName" placeholder="Enter your full name" required>

            <label for="agentCode">Agent Code:</label>
            <input type="text" id="agentCode" name="agentCode" placeholder="Enter your agent code" required>

            <label for="agentEmail">Agent Email:</label>
            <input type="email" id="agentEmail" name="agentEmail" placeholder="Enter your email" required>

            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" placeholder="Enter your phone number" required>

            <label for="agencyName">Agency Name:</label>
            <input type="text" id="agencyName" name="agencyName" placeholder="Enter agency name" required>

            <div class="button-container">
                <button type="submit">Submit</button>
                <a href="homepage.php">Go Back</a>
            </div>
        </form>
    </div>
</body>
</html>
