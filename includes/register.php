<?php

include("config.php");

$fullname = trim($_POST['name']);
$username = trim($_POST['username']);
$password = trim($_POST['password']);
$email = trim($_POST['email']);
$confirm_password = trim($_POST['confirm_password']);
//checking if the passwords are same or not
if($password!=$confirm_password){
    echo "Both the passwords are different";
}
else{
$sql = "INSERT INTO users (fullname, email,username, password) VALUES (?,?,?,?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            mysqli_stmt_bind_param($stmt, "ssss", $fullname,$email,$param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                header("Location: http://localhost/salon/Login/login.html");
            } else{
                echo "Username already taken!";
            }
mysqli_stmt_close($stmt);
}
}
mysqli_close($conn);
?>