<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subjesct = $_POST['subject'];
$massage = $_POST[' message'];

$email_from = 'info@yourwebsite.com';

$email_subject = ' New Form Submissiobn ';

$email_body = "User name : $name.\n"
               "User Email :$visitor_email.\n"
               "Subject : $subject.\n"
               "User Massage : $massage .\n"
$to = 'technicaljignesh123@gmail.com';

$headers = "From : $email_from \r\n";

$headers .=" reply-To: $visitor_email\r\n";

mail($to,$email_subject,$email_body,)

header( "Location: contact.html")

?>