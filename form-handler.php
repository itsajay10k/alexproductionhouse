<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'http://localhost:3000/wedding%20project%20-%20alex%20production%20house%20-%20COPY!/contact-us.html';

$email_subject = 'New Order for Wedding';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Message: $message.\n";

$to = 'thealexproduction01@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact-us.html");

?>