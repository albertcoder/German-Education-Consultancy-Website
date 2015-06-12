<?php
// the message
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];

// use wordwrap() if lines are longer than 70 characters
$message_wrapped = wordwrap($message,70);

// send email
mail($email,"Query",$message_wrapped);
?>
