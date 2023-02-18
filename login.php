<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost', 'root', '', 'home');

    if($conn->connect_error){
        die('connection failed: '.$conn->connect_error);
    }
    else{
            $stmt = $conn->prepare('insert into login (email, password) values(?,?)');
            $stmt->bind_param('ss', $email, $password);
            $stmt->execute();
            echo "registration succesful";
            $stmt->close();
            $conn->close();
        }
   
   
?>