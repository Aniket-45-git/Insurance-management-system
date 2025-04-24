<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "assurance_management_system";
$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sort_column = isset($_GET['sort_column']) ? $_GET['sort_column'] : 'policy_date';
$sort_order = isset($_GET['sort_order']) && $_GET['sort_order'] == 'desc' ? 'desc' : 'asc';


$sql = "SELECT policy_id, policy_type, policy_validation, price, policy_date FROM policiesss ORDER BY $sort_column $sort_order";
$result = $conn->query($sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Policies</title>
    <style>
        
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        h1 {
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
        }

        a {
            color: #1e90ff;
            text-decoration: none;
            font-size: 16px;
            margin-right: 15px;
        }

        a:hover {
            text-decoration: underline;
        }

        
        table {
            width: 80%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        thead {
            background-color: #1e90ff;
            color: #fff;
            text-align: left;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            font-size: 14px;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #f1f1f1;
        }

        th {
            font-size: 16px;
            font-weight: 600;
        }

        td a {
            color: #1e90ff;
            font-weight: bold;
        }

        td a:hover {
            text-decoration: none;
            background-color: blueviolet;
        }

        
        a.add-new-policy {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            margin-bottom: 15px;
            display: inline-block;
            text-decoration: none;
        }

        a.add-new-policy:hover {
            background-color: #218838;
        }

       
        .sorting-buttons {
            margin-bottom: 15px;
        }

        .sorting-buttons button {
            background-color: #1e90ff;
            color: white;
            border: none;
            padding: 8px 16px;
            font-size: 16px;
            cursor: pointer;
            margin-right: 10px;
            border-radius: 5px;
        }

        .sorting-buttons button:hover {
            background-color: #218838;
        }

        
        @media (max-width: 768px) {
            table {
                width: 100%;
                margin: 10px 0;
            }

            th, td {
                font-size: 12px;
            }

            a {
                font-size: 14px;
            }

            a.add-new-policy {
                padding: 8px 16px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <h1>Manage Policies</h1>
    <a href="add_policy.php">Add New Policy</a> | <a href="admin_panell.php">Go Back</a>

   
    <div class="sorting-buttons">
        <a href="?sort_column=policy_date&sort_order=asc"><button>Sort by Date Ascending</button></a>
        <a href="?sort_column=policy_date&sort_order=desc"><button>Sort by Date Descending</button></a>
    </div>

    <?php if ($result->num_rows > 0): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Policy Type</th>
                    <th>Policy Validation</th>
                    <th>Price</th>
                    <th>Policy Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['policy_id']; ?></td>
                        <td><?php echo $row['policy_type']; ?></td>
                        <td><?php echo $row['policy_validation']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['policy_date']; ?></td>
                        <td>
                            <a href="edit_policy.php?id=<?php echo $row['policy_id']; ?>">Edit</a> |
                            <a href="delete_policy.php?id=<?php echo $row['policy_id']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No policies found.</p>
    <?php endif; ?>

    <?php $conn->close(); ?>
</body>
</html>
