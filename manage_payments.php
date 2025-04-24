<?php
include 'db.php';


$query = "SELECT * FROM payments";
$stmt = $pdo->prepare($query);
$stmt->execute();
$payments = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Payments</title>
    <style>
        
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f2f5;
            color: #333;
        }

        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        
        h2 {
            text-align: center;
            font-size: 2.5rem;
            color: #4CAF50;
            margin-bottom: 30px;
            letter-spacing: 2px;
        }

        
        a.add-payment-btn {
            display: inline-block;
            padding: 12px 20px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1rem;
            margin-bottom: 20px;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        a.add-payment-btn:hover {
            background-color: #0056b3;
        }

        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 1.1rem;
        }

        table th, table td {
            padding: 15px;
            text-align: center;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
        }

        table th {
            background-color: #4CAF50;
            color: white;
            font-size: 1.2rem;
        }

        table td {
            background-color: #fff;
            color: #333;
        }

        
        table tr:hover {
            background-color: #f1f1f1;
        }

        
        td a {
            padding: 8px 15px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1rem;
            margin: 0 5px;
            transition: background-color 0.3s ease;
        }

        td a.edit-btn {
            background-color: #28a745;
        }

        td a.edit-btn:hover {
            background-color: #218838;
        }

        td a.delete-btn {
            background-color: #dc3545;
        }

        td a.delete-btn:hover {
            background-color: #c82333;
        }

        
        a.go-back-btn {
            display: inline-block;
            padding: 12px 20px;
            background-color: #6c757d;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1rem;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        a.go-back-btn:hover {
            background-color: #5a6268;
        }

       
        @media (max-width: 768px) {
            table {
                font-size: 0.9rem;
            }

            a.add-payment-btn,
            a.go-back-btn {
                font-size: 1.2rem;
            }

            h2 {
                font-size: 2rem;
            }

            td a {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Manage Payments</h2>
        
        <a href="add_payment.php" class="add-payment-btn">Add New Payment</a>
        <a href="admin_panell.php" class="go-back-btn">Go Back</a>
        
        <table>
            <thead>
                <tr>
                    <th>Payment ID</th>
                    <th>Policyholder ID</th>
                    <th>Amount</th>
                    <th>Payment Method</th>
                    <th>Payment Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($payments as $payment) { ?>
                <tr>
                    <td><?php echo $payment['payment_id']; ?></td>
                    <td><?php echo $payment['policyholder_id']; ?></td>
                    <td><?php echo $payment['amount']; ?></td>
                    <td><?php echo $payment['payment_method']; ?></td>
                    <td><?php echo $payment['payment_date']; ?></td>
                    <td>
                        <a href="edit_payment.php?id=<?php echo $payment['payment_id']; ?>" class="edit-btn">Edit</a>
                        <a href="delete_payment.php?id=<?php echo $payment['payment_id']; ?>" class="delete-btn" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>
</html>
