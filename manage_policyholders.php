<?php
require_once 'db.php';


$sort = isset($_GET['sort']) ? $_GET['sort'] : 'id';
$order = isset($_GET['order']) && $_GET['order'] == 'DESC' ? 'DESC' : 'ASC';


$query = "SELECT * FROM policyholders ORDER BY $sort $order";
$stmt = $pdo->query($query);
$policyholders = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<html>
<head>
    <title>Manage Policyholders</title>
</head>
<style>
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        color: #333;
        padding: 20px;
    }

    h1 {
        color: #333;
        font-size: 32px;
        margin-bottom: 20px;
    }

   
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    th, td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #333;
        color: white;
        font-weight: bold;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    
    a {
        text-decoration: none;
        color: #007bff;
        font-weight: bold;
    }

    a:hover {
        text-decoration: underline;
    }

    a:focus {
        outline: none;
    }

    
    a[href="add_policyholder.php"] {
        background-color: #28a745;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        display: inline-block;
        margin-bottom: 20px;
        font-size: 16px;
    }

    a[href="admin_panell.php"] {
        background-color: #28a745;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        display: inline-block;
        margin-bottom: 20px;
        font-size: 16px;
    }

    a[href="add_policyholder.php"]:hover {
        background-color: #218838;
    }

    
    .sort-btn {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 16px;
        margin-bottom: 20px;
        display: inline-block;
        cursor: pointer;
    }

    .sort-btn:hover {
        background-color: #0056b3;
    }

    
    @media (max-width: 768px) {
        body {
            padding: 10px;
        }

        h1 {
            font-size: 28px;
        }

        table {
            font-size: 14px;
        }

        th, td {
            padding: 10px;
        }
    }
</style>
<body>
    <h1>Manage Policyholders</h1>
    <a href="add_policyholder.php">Add New Policyholder</a>
    <a href="admin_panell.php">Go Back</a>

    
    <a href="?sort=id&order=ASC" class="sort-btn">Sort by ID (Ascending)</a>
    <a href="?sort=id&order=DESC" class="sort-btn">Sort by ID (Descending)</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone No</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($policyholders as $policyholder): ?>
                <tr>
                    <td><?php echo $policyholder['id']; ?></td>
                    <td><?php echo $policyholder['fullname']; ?></td>
                    <td><?php echo $policyholder['email']; ?></td>
                    <td><?php echo $policyholder['phone_no']; ?></td>
                    <td>
                        <a href="edit_policyholder.php?id=<?php echo $policyholder['id']; ?>">Edit</a> |
                        <a href="delete_policyholder.php?id=<?php echo $policyholder['id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
