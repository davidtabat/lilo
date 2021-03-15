<?php

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    
  

    $servername = "localhost";
    $username = "root";
    $dbname = "testform";

    try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,'');
        
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "INSERT INTO users (fname, lname, email)
      VALUES ('$fname', '$lname', '$email')";
      $conn->exec($sql);
        
      echo "New record created successfully";
        $conn = null;

    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }

?>

