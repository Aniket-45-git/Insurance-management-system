<?php

$host = "localhost";  
$user = "root";       
$password = "";       
$database = "assurance_management_system"; 


$conn = new mysqli($host, $user, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $policy_type = $_POST['policy_type'] ?? '';
    $policy_validation = $_POST['policy_validation'] ?? '';
    $price = (float) $_POST['amount'];  
    $policy_date = $_POST['policy_date'] ?? '';

    if (!empty($policy_type) && !empty($policy_validation) && !empty($price) && !empty($policy_date)) {
        
        $stmt = $conn->prepare("INSERT INTO policiesss (policy_type, policy_validation, price, policy_date) VALUES (?, ?, ?, ?)");

        if (!$stmt) {
            die("Error in SQL statement: " . $conn->error);
        }

        
        $stmt->bind_param("ssds", $policy_type, $policy_validation, $price, $policy_date);

        
        if ($stmt->execute()) {
            $message = "<div class='message success'>Policy added successfully!</div>";
        } else {
            $message = "<div class='message error'>Error: " . $stmt->error . "</div>";
        }

        $stmt->close();
    } else {
        $message = "<div class='message error'>Error: All fields are required!</div>";
    }
}


$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Policy Selection</title>
    <style>
      

body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background: url('img for form2.jpg') no-repeat center center/cover;
}
#policy_type{
    color: black;

}
#policy_validation{
    color: black;
    width: 90%;
}

.form-container {
    width: 100%;
    max-width: 450px;
    background: rgba(255, 255, 255, 0.15);
    padding: 30px;
    border-radius: 15px;
    backdrop-filter: blur(10px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    text-align: center;
    border: 1px solid rgba(255, 255, 255, 0.3);
}


h2 {
    margin-bottom: 20px;
    color: white;
    font-size: 24px;
    font-weight: bold;
    text-transform: uppercase;
}


label {
    display: block;
    margin: 12px 0 5px;
    color: white;
    font-weight: 600;
    text-align: left;
}


input, select {
    width: 90%;
    padding: 12px;
    margin-top: 5px;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    background: rgba(255, 255, 255, 0.2);
    color: white;
    outline: none;
    transition: 0.3s;
}

input::placeholder {
    color: rgba(31, 28, 28, 0.7);
}

select {
    cursor: pointer;
}


input[readonly] {
    background-color: rgba(25, 22, 22, 0.4);
    cursor: not-allowed;
}


button {
    width: 90%;
    background: linear-gradient(135deg, #4CAF50, #2E8B57);
    color: white;
    padding: 12px;
    font-size: 16px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: 0.3s;
    font-weight: bold;
    margin-top: 5%;
}

button:hover {
    background: linear-gradient(135deg, #2E8B57, #4CAF50);
    transform: scale(1.05);
}


.next-page-btn {
    width: 87%;
    display: block;
    margin-top: 15px;
    margin-left: 4%;
    background: linear-gradient(135deg, #2196F3, #1976D2);
    padding: 12px;
    text-decoration: none;
    color: white;
    border-radius: 8px;
    font-size: 16px;
    font-weight: bold;
    transition: 0.3s;
}

.next-page-btn:hover {
    background: linear-gradient(135deg, #1976D2, #2196F3);
    transform: scale(1.05);
}

.message-box {
            margin-bottom: 15px;
            text-align: center;
        }

        .message {
            padding: 10px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            display: inline-block;
            width: 100%;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }



@media (max-width: 600px) {
    .form-container {
        width: 90%;
    }
}



    </style>
</head>
<body>
    <div class="form-container">
        <h2>Enter Policy Details</h2>
         
         <div class="message-box">
            <?php echo $message; ?>
        </div>
        <form method="POST" action="">
    
    <div class="input-group">
        <label for="policy_type">Policy Type</label>
        <select id="policy_type" name="policy_type" required onchange="updatePrice()">
            <option value="Bike">Bike</option>
            <option value="Car">Car</option>
            <option value="Truck">Truck</option>
        </select>
    </div>

    
    <div class="input-group">
        <label for="policy_validation">Policy Validation</label>
        <select id="policy_validation" name="policy_validation" required onchange="updatePrice()">
            <option value="6 Months">6 Months</option>
            <option value="1 Year">1 Year</option>
        </select>
    </div>

    
    <div class="input-group">
        <label for="amount">Price</label>
        <input type="number" id="amount" name="amount" readonly required>
    </div>

   

    
    <div class="input-group">
        <label for="payment_date">policy Date</label>
        <input type="date" id="policy_date" name="policy_date" required>
    </div>

    <div class="button-container">
        <button type="submit">Submit Payment</button>
        
    </div>
</form>

<script>
    function updatePrice() {
        let policyType = document.getElementById("policy_type").value;
        let validationPeriod = document.getElementById("policy_validation").value;
        let priceInput = document.getElementById("amount");

        let basePrice = 0;

        
        if (policyType === "Bike") {
            basePrice = 5000;
        } else if (policyType === "Car") {
            basePrice = 10000;
        } else if (policyType === "Truck") {
            basePrice = 15000;
        }

       
        if (validationPeriod === "1 Year") {
            basePrice *= 2;
        }

        
        priceInput.value = basePrice;
    }

    
    window.onload = updatePrice;
</script>


        <a href="paymentform.php" class="next-page-btn">Next Page</a>
    </div>
</body>
</html>
