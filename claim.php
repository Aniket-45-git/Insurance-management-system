<?php
include('db.php'); // Include your database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $claimType = $_POST['claimType'];
    $incidentDate = $_POST['incidentDate'];
    $claimAmount = $_POST['claimAmount'];
    $incidentDescription = $_POST['incidentDescription'];
    $policyholder_id = $_POST['policyholder_id']; // Manually filled by the user
    $policy_id = $_POST['policy_id']; // Manually filled by the user

    $status = "Pending"; // Default claim status
    $claim_date = date("Y-m-d"); // Current date

    // Insert the claim data into the claims table
    $insertQuery = "INSERT INTO claims (policyholder_id, policy_id, claim_details, status, claim_date) 
                    VALUES (?, ?, ?, ?, ?)";

    // Prepare and execute the query
    if ($stmt = $conn->prepare($insertQuery)) {
        $stmt->bind_param("iisss", $policyholder_id, $policy_id, $incidentDescription, $status, $claim_date);

        if ($stmt->execute()) {
            echo "<script>alert('Claim submitted successfully!'); window.location.href='homepage.php';</script>";
        } else {
            echo "<script>alert('Error submitting claim.'); window.history.back();</script>";
        }

        $stmt->close();
    } else {
        echo "<script>alert('Query preparation failed.'); window.history.back();</script>";
    }

    // Close connection
    $conn->close();
} else {
    echo "<script>alert('Invalid request.'); window.history.back();</script>";
}
?>

<html>
<head>
    <title>Claim Form</title>
</head>
<body>
    <div class="form-container">
        <h2>Claim Form</h2>
        <form action="claim.php" method="POST">

            <!-- Fields filled by the user -->
            <label for="policyholder_id">Policyholder ID:</label>
            <input type="text" id="policyholder_id" name="policyholder_id" placeholder="Enter policyholder ID" required>

            <label for="policy_id">Policy ID:</label>
            <input type="text" id="policy_id" name="policy_id" placeholder="Enter policy ID" required>

            <label for="claimType">Claim Type:</label>
            <select id="claimType" name="claimType" required>
                <option value="">Select claim type</option>
                <option value="Bike">Bike</option>
                <option value="Car">Car</option>
                <option value="Truck">Truck</option>
            </select>

            <label for="incidentDate">Incident Date:</label>
            <input type="date" id="incidentDate" name="incidentDate" required>

            <label for="claimAmount">Claim Amount (in $):</label>
            <input type="number" id="claimAmount" name="claimAmount" placeholder="Enter the amount" required>

            <label for="incidentDescription">Incident Description:</label>
            <textarea id="incidentDescription" name="incidentDescription" placeholder="Provide details about the incident" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
