<?php
try {
        $pdoConnect = new PDO("mysql:host=localhost;dbname=testform","root","");
    } catch (PDOException $exc) {
        echo $exc->getMessage();
        exit();
    }

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $to = 'test@developers-alliance.com';
    $subject = 'Form data';
    $message = 'First Name: ' . $fname . 'Last Name: ' . $lname . 'email: . $email' ;
    $headers = "From: hello@email-address.com\r\n";

   if(mail($to, $subject, $message, $headers)){
           $response = "Form submitted";
   }
        else {
                $response = "Failed to submit";        
   }

    $pdoQuery = "INSERT INTO `users`(`fname`, `lname`, `email`) VALUES (:fname,:lname,:email)";
    
    $pdoResult = $pdoConnect->prepare($pdoQuery);
    
    $pdoExec = $pdoResult->execute(array(":fname"=>$fname,":lname"=>$lname,":email"=>$email));

    
    echo $response;


?>
