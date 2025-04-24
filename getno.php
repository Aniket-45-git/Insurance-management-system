<?php
// Include the Twilio PHP SDK (adjust path if necessary)
require_once 'vendor/autoload.php'; // Composer's autoload

use Twilio\Rest\Client;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the phone number from the form submission
    $phone_number = $_POST['phone'];

    // Twilio credentials (replace with your actual credentials)
    $sid = 'your_account_sid';  // Get from your Twilio console
    $token = 'your_auth_token'; // Get from your Twilio console
    $twilio_number = 'your_twilio_phone_number'; // Your Twilio phone number

    // Validate phone number format (optional)
    if (!preg_match('/^\+?[1-9]\d{1,14}$/', $phone_number)) {
        echo "Invalid phone number format.";
        exit;
    }

    // Create a Twilio client instance
    $client = new Client($sid, $token);

    try {
        // Send the SMS
        $message = $client->messages->create(
            $phone_number,  // The user's phone number (from the form)
            [
                'from' => $twilio_number,  // Your Twilio phone number
                'body' => 'Your policy has been successfully processed. Thank you for choosing us!'
            ]
        );

        // Display a success message to the user
        echo "<h3>SMS sent successfully to " . htmlspecialchars($phone_number) . "!</h3>";
    } catch (Exception $e) {
        // Handle any errors (e.g., invalid phone number, connection issues)
        echo "<h3>Error: " . htmlspecialchars($e->getMessage()) . "</h3>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insurance Policy Confirmation</title>
</head>
<body>
    <h2>Complete Your Insurance Policy</h2>
    <!-- Form to collect the phone number -->
    <form action="" method="POST">
        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" placeholder="Enter your phone number" required>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
