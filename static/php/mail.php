<?php $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $formcontent = "From: $name \n Message: $message";
  $recipient = "akin.pjadewale@yahoo.com";
  $subject = "Message From Akins Website";
  $mailheader = "From: $email \r\n";
  mail($recipient, $subject, $formcontent, $mailheader) or die("Error! You have failed!");
  echo "Success! You'll hear from us soon!". " -" . "<a href='#home'> Return Home</a>";
  ?>
