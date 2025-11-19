<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // OWNER EMAIL HERE
    $to = "hr@rlitechnosoft.com";
    $subject = "New Contact Message From Website - RLI Technosoft";

    $body = "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";

    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)){
        echo "<h2 style='color:green; text-align:center;'>Message Sent Successfully!</h2>";
    } else {
        echo "<h2 style='color:red; text-align:center;'>Message Failed to Send!</h2>";
    }
}
?>


