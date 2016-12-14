<?php

$recepient = trim($_POST["recepient"]);
$sitename = "(by Crypto)";
 
$name = trim($_POST["name"]);
$email = trim($_POST["sendermail"]);
$title = trim($_POST["title"]);
$newmessage = trim($_POST["newMessage"]);

$pagetitle = "$title";
$message = "From: $name \nE-mail: $email \Message: $newmessage";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n $sitename");
>