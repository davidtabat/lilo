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
    if(isset($email)) echo "Form submitted";
    else { echo "error";}
    $to = 'test@developers-alliance.com';
    $subject = 'Form data';
    $message = 'First Name: ' . $fname . ' Last Name: ' . $lname . ' e-mail: ' . $email  ;
    $headers = "From: your@email-address.com\r\n";

    mail($to, $subject, $message, $headers);


    $pdoQuery = "INSERT INTO `users`(`fname`, `lname`, `email`) VALUES (:fname,:lname,:email)";
    
    $pdoResult = $pdoConnect->prepare($pdoQuery);
    
    $pdoExec = $pdoResult->execute(array(":fname"=>$fname,":lname"=>$lname,":email"=>$email)); 
?>
