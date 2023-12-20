<?php
$name = $_POST['name']
$visitor_mail = $_POST['email']
$subject = $_POST['subject']
$message = $_POST['message']

$email_from = 'info@yourwebsite.com'
$email_subject = "New Form Submission"
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message.\n";

$to = 'test@gmail.com'      
$headers = "From: $email_from \r\n";
$headers .= "Reply-To : $vistor_email";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html")

?>



