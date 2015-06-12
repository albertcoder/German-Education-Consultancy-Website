<?php
// the message
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];

$info = "Name: ".$name."\n"."Email: ".$email."\n"."Phone: ".$phone."\n"."Message: ".$message;

// use wordwrap() if lines are longer than 70 characters
$message_wrapped = wordwrap($info,70);

// send email
mail("eralbert9191@gmail.com","Query",$message_wrapped);

?>

