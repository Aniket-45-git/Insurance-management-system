<?php
include 'db.php'; 

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    $type = trim($_POST['policy_type']);
    $validation = trim($_POST['policy_validation']);
    $price = trim($_POST['price']);
    $date = trim($_POST['policy_date']);

    
    if (!empty($type) && !empty($validation) && is_numeric($price) && !empty($date)) {
        try {
            
            $query = "INSERT INTO policiesss (policy_type, policy_validation, price, policy_date) 
                      VALUES (:policy_type, :policy_validation, :price, :policy_date)";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':policy_type', $type);
            $stmt->bindParam(':policy_validation', $validation);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':policy_date', $date);
            $stmt->execute();

            
            header("Location: pageformanagepolicy.php?success=1");
            exit;
        } catch (PDOException $e) {
            $error = "Error: " . $e->getMessage();
        }
    } else {
        $error = "Please fill in all fields correctly.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Policy</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        
        .form-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 15px;
        }

        button:hover {
            background-color: #218838;
        }

        .error {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }

        .success {
            color: green;
            text-align: center;
            margin-bottom: 10px;
        }

        .back-button {
            display: inline-block;
            text-align: center;
            margin-top: 15px;
            color: #1e90ff;
            text-decoration: none;
        }

        .back-button:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Add New Policy</h2>

        <?php if (isset($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>

        <form method="POST">
            <label>Policy Type:</label>
            <input type="text" name="policy_type" required>

            <label>Policy Validation:</label>
            <input type="text" name="policy_validation" required>

            <label>Price:</label>
            <input type="number" step="0.01" name="price" required>

            <label>Policy Date:</label>
            <input type="date" name="policy_date" required>

            <button type="submit">Add Policy</button>
        </form>

        <a href="pageformanagepolicy.php" class="back-button">Back to Policies</a>
    </div>

</body>
</html>
