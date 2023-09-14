<?php

   $to = "jibaskgarden@gmail.com";
   $subject = "New Quotes From Jibask Garden";
   $message = "A new Quotes form has been received.\n\n";
   $message .= "Name: " . $_POST["name"] . "\n";
   $message .= "Phone: " . $_POST["phone"] . "\n";
   $message .= "Email: " . $_POST["email"] . "\n"; 
   $message .= "Subject: " . $_POST["sub"] . "\n";
   $message .= "Message: " . $_POST["message"];
   $headers = "From: no-reply@example.com";
   mail($to, $subject, $message, $headers);
   header("Location: contact-2.html");
?>