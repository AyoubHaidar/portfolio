<?php 
$name = $_POST ['name'];
$email = $_POST ['email'];
$message = $_POST ['message'];

$email_from = 'ayoub@it-lb.co';
$email_sbg = "new form";
$email_body = "user name: $name. \n"
."user email: $email. \n"
."user message: $message.\n";

$to = "ayoub.haidar5250@gmail.com";
$headers = "from: $email_from \r\n";
$headers .= "reply-to $email \r\n";
mail($to,$email_sbg,$email_body,$headers)
header(Location: index.html);

?>