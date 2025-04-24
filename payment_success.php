<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }
        .success-container {
            text-align: center;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
        }
        .success-icon {
            width: 80px;
            height: 80px;
            background-color: #4CAF50;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 20px;
            animation: popIn 0.5s ease-out;
        }
        .checkmark {
            color: white;
            font-size: 50px;
            font-weight: bold;
        }
        h2 {
            color: #4CAF50;
        }
        p {
            color: #555;
        }
        @keyframes popIn {
            0% { transform: scale(0); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }
    </style>
    <script>
        setTimeout(() => {
            window.location.href = "homepage.php"; 
        }, 5000);
    </script>
</head>
<body>
    <div class="success-container">
        <div class="success-icon">
            <span class="checkmark">&#10004;</span>
        </div>
        <h2>Payment Successful!</h2>
        <p>Your policy is successfully done.</p>
        <p>Redirecting to the homepage...</p>
    </div>
</body>
</html>
