<?php

require_once 'db.php'; 


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
       
        $query = "DELETE FROM policyholders WHERE id = :id";
        $stmt = $pdo->prepare($query);
        
        
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        
        
        $stmt->execute();

        
        header("Location: manage_policyholders.php");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "No ID specified.";
}
?>
