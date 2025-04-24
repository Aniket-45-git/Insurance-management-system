<?php
include 'db.php'; 


if (isset($_GET['id'])) {
    $policy_id = $_GET['id'];

    
    $query = "SELECT * FROM policiesss WHERE policy_id = :policy_id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':policy_id', $policy_id, PDO::PARAM_INT);
    $stmt->execute();
    $policy = $stmt->fetch(PDO::FETCH_ASSOC);


    if (!$policy) {
        header("Location: pageformanagepolicy.php?error=Policy not found");
        exit;
    }
}


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $type = $_POST['policy_type'];
    $validation = $_POST['policy_validation'];
    $price = $_POST['price'];
    $date = $_POST['policy_date'];

     
    if (!empty($type) && !empty($validation) && is_numeric($price) && !empty($date)) {
        try {
            
            $query = "UPDATE policiesss 
                      SET policy_type = :policy_type, policy_validation = :policy_validation, 
                          price = :price, policy_date = :policy_date 
                      WHERE policy_id = :policy_id";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':policy_type', $type, PDO::PARAM_STR);
            $stmt->bindParam(':policy_validation', $validation, PDO::PARAM_STR);
            $stmt->bindParam(':price', $price, PDO::PARAM_STR);
            $stmt->bindParam(':policy_date', $date, PDO::PARAM_STR);
            $stmt->bindParam(':policy_id', $policy_id, PDO::PARAM_INT);
            $stmt->execute();

           
            header("Location: pageformanagepolicy.php?success=Policy updated");
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
    <title>Edit Policy</title>
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
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 15px;
        }

        button:hover {
            background-color: #0056b3;
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
        <h2>Edit Policy</h2>

        <?php if (isset($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>

        <form method="POST">
            <label>Policy Type:</label>
            <input type="text" name="policy_type" value="<?php echo htmlspecialchars($policy['policy_type']); ?>" required>

            <label>Policy Validation:</label>
            <input type="text" name="policy_validation" value="<?php echo htmlspecialchars($policy['policy_validation']); ?>" required>

            <label>Price:</label>
            <input type="number" step="0.01" name="price" value="<?php echo htmlspecialchars($policy['price']); ?>" required>

            <label>Policy Date:</label>
            <input type="date" name="policy_date" value="<?php echo htmlspecialchars($policy['policy_date']); ?>" required>

            <button type="submit">Update Policy</button>
        </form>

        <a href="pageformanagepolicy.php" class="back-button">Back to Policies</a>
    </div>

</body>
</html>
