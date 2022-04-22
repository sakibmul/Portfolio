<?php

$message_sent = false;

if (isset($_POST['email']) && $_POST['email'] != "") {

  if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

  $userFirstName = $_POST['firstname'];
  $userSecondName = $_POST['secondname'];
   $userEmail = $_POST['email'];
   $userMessage = $_POST['message'];

   $to = "zakmog@outlook.com";
   $body = "";

   $body .="First Name: " . $userFirstName . "\r\n";
   $body .="Second Name: " . $userSecondName . "\r\n";
   $body .="Email: " . $userEmail . "\r\n";
   $body .="Message: " . $userMessage . "\r\n";


   mail($to,$userEmail,$body);

   $message_sent = true;

   } 

}

?>