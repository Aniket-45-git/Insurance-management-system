<?php
include 'display_data.php'; 


$sql = "SELECT *FROM policyholders"; 
$result = $conn->query($sql);

echo "<table border='1'cellpadding='10' cellspacing='0'style='width: 80%; margin: auto; border-collapse: 'collapse';>";
echo "<tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Address</th>
        <th>Actions</th>
      </tr>"; 
if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>"; 
        echo "<td>" . $row["fullname"] . "</td>"; 
        echo "<td>" . $row["email"] . "</td>"; 
        echo "<td>" . $row["phone_no"] . "</td>"; 
        echo "<td>" . $row["address"] . "</td>"; 
        echo "<td>
                <a href='edit.php?id=" . $row["id"] . "'>Edit</a> | 
                <a href='copy.php?id=" . $row["id"] . "'>Copy</a> | 
                <a href='delete.php?id=" . $row["id"] . "'>Delete</a>
              </td>"; 
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<tr><td colspan='6'>No results found</td></tr>";
    echo "</table>";
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background-color: #fff;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        a {
            text-decoration: none;
            color: #007BFF;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Fetched Data from Database</h1>
    <div>
        <?php include 'display_data.php'; 
         ?>
    </div>
</body>
</html>
