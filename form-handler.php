<?php
$name = $_POST['name'];
$visiter_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';
$email_subject = 'New Form Submission:';
$email_body = "User Name: $name.\n".
              "User Email: $visiter_email.\n".
              "Subject: $subject.\n".
              "User Message: $message.\n";


$to = 'destructorbawa@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visiter_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");


?>