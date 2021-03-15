<?php
   $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    
$to = 'test@developers-alliance.com';
      $subject = 'This is a Mailhog test';
      $message = 'First Name: ' . $fname . ' Last Name: ' . $lname . ' e-mail: ' . $email  ;
      $headers = "From: your@email-address.com\r\n";
        
    mail($to, $subject, $message, $headers);

?>