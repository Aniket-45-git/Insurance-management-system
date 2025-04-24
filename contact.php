<?php

$host = 'localhost';       
$user = 'root';            
$password = '';            
$dbname = 'assurance_management_system'; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set error mode to exception
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    
    if (empty($name) || empty($email) || empty($message)) {
        $error = "All fields are required!";
    } else {
        
        $query = "INSERT INTO contact_form (name, email, message) VALUES (:name, :email, :message)";
        $stmt = $pdo->prepare($query);
        
        
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);

        
        if ($stmt->execute()) {
            $success = "Message sent successfully!";
        } else {
            $error = "Something went wrong. Please try again.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }
        body {
            background: url('yellow-telephone-receiver-turquoise-background_181624-60649.avif') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .contact-container {
            background-color: rgba(0, 0, 0, 0.228);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        label {
            font-size: 14px;
            color: #666;
            margin-bottom: 5px;
            display: block;
        }
        .input-group {
            margin-bottom: 15px;
        }
        .input-group input, 
        .input-group textarea {
            width: 100%;
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 5px;
            transition: border 0.3s;
        }
        .input-group input:focus, 
        .input-group textarea:focus {
            border-color: #4CAF50;
        }
        .input-group textarea {
            resize: none;
            height: 100px;
        }
        button {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            text-align: center;
        }
        .success {
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="contact-container">
        <h2>Contact Us</h2>

        
        <?php if (isset($error)) { echo "<p class='error'>$error</p>"; } ?>
        <?php if (isset($success)) { echo "<p class='success'>$success</p>"; } ?>

        
        <form method="POST">
            <div class="input-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>

            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="input-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Write your message" required></textarea>
            </div>

            <button type="submit">Send Message</button>
        </form>
    </div>

</body>
</html>
