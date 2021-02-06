<?php

$to = "niyigena81@gmail.com";//target email
$subject = "Email from my website";


$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['message'];



$headers .= "Content-type: text/html;\r\n";
$headers .= "From: $email";



mail($to, $subject, $comment, $headers);
echo "Done!! Thank you $name";

//https://www.youtube.com/watch?v=4Z5YJd83jQA&feature=youtu.be


?>