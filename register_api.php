<?php

    include 'db_config.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = $_POST["firstname"];
        $lname = $_POST["lastname"];
        $user = $_POST["username"];
        $pass = $_POST["password"];
        $cpw = $_POST['cpw'];

        if($cpw == $pass){

        $pass = password_hash($_POST["password"], PASSWORD_DEFAULT);  // Password encryption
        $sql = "INSERT INTO user_info (firstname, lastname, username, password) VALUES ( '$fname', '$lname', '$user', '$pass')";
        
        if ($conn->query($sql) === TRUE) {
            header("Location: login.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        }else{
            echo 'password not match';
         }
        
    }

$conn->close();
?>