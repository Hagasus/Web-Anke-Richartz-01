<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$to ="mrsandmanvol666@googlemail.com";
$subject = "neue Anfrage von Anke";

$body = "Name: " . $name . "Email: " . $email . "Message:" . $message;

mail($to,$subject,$body);

?>