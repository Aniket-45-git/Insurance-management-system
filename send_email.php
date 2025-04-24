<?php
$data = json_decode(file_get_contents("php://input"), true);
if (isset($data['to']) && isset($data['subject']) && isset($data['message'])) {
    
    $to = $data['to'];
    $subject = $data['subject'];
    $message = $data['message'];
    $headers = "From: admin@yourwebsite.com";

    if (mail($to, $subject, $message, $headers)) {
        echo json_encode(["status" => "success", "message" => "Email sent successfully."]);
    } else {
        echo json_encode(["status" => "error", "message" => "Failed to send email."]);
    }
}
?>
