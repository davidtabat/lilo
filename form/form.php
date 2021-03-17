<?php

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];

    
  

    $servername = "localhost";
    $username = "root";
    $dbname = "testform";

    try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,'');
        
            if (empty($_POST["fname"])) {
                echo "First Name is required";
                exit;
              } else {
                    if (!preg_match("/^[a-zA-Z]*$/",$fname)) {
                    echo "Only letters allowed";
                      exit;  
                    }
                }

            if (empty($_POST["lname"])) {
                echo "Last Name is required";
                exit;
              } else {
                    if (!preg_match("/^[a-zA-Z]*$/",$lname)) {
                    echo "Only letters allowed";
                       exit; 
                    }
                }

            if (empty($_POST["email"])) {
                echo "Email is required";
                exit;
              } else {
                  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  echo "Invalid email format";
                     exit; 
                }
              }
        
        
        
        
        
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "INSERT INTO users (fname, lname, email)
      VALUES ('$fname', '$lname', '$email')";
      $conn->exec($sql);
        
      echo 1;

    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }

?>

