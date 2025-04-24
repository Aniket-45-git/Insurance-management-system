<?php
include 'db.php'; 

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $policy_id = $_GET['id'];

    
    $query = "DELETE FROM policiesss WHERE policy_id = :policy_id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':policy_id', $policy_id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        
        header("Location: pageformanagepolicy.php?msg=Policy Deleted Successfully");
        exit;
    } else {
        echo "Error deleting policy.";
    }
} else {
    echo "Invalid policy ID.";
}
?>
