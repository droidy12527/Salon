<?php
require_once "config.php";
$username = trim($_POST['username']);
$password = trim($_POST['password']);

// Connection on Object Oriented PHP
$sql = "SELECT * from users where username = ? LIMIT 1 ";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
    echo "There was error processing";
}else{
    mysqli_stmt_bind_param($stmt,"s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($result)){
        $pwdcheck = password_verify($password, $row['password']);
        if($pwdcheck == false){
            echo "the password is wrong";
            exit();
        }else if($pwdcheck == true){
            session_start();
            $_SESSION['username'] = $row['username'];
            $_SESSION['loggedid'] = true;
            echo "Logged in sucessfully";
        }
        else{
            echo "The password is wrong";
        }
    }else{
        echo "error fetching rows";
    }
}
mysqli_close($conn);
?>