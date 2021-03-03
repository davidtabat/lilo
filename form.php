<?php
try {
        $pdoConnect = new PDO("mysql:host=localhost;dbname=testform","root","");
    } catch (PDOException $exc) {
        echo $exc->getMessage();
        echo "Message Saved";
        exit();
    }

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    

    $pdoQuery = "INSERT INTO `users`(`fname`, `lname`, `email`) VALUES (:fname,:lname,:email)";
    
    $pdoResult = $pdoConnect->prepare($pdoQuery);
    
    $pdoExec = $pdoResult->execute(array(":fname"=>$fname,":lname"=>$lname,":email"=>$email));

    
    if(mysqli_query($pdoConnect, $pdoQuery))  
      {  
           echo "Message Saved";  
      }  


?>
