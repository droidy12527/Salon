<?php
session_start();
if(isset($_SESSION['loggedid'])){
    if ($_SESSION['username'] == 'admin'){
        header('Location: http://localhost/salon/admin_panel.php ');
    }else{
    header("location: http://localhost/salon");
    }
}
else{
require_once "config.php";
$username = trim($_POST['username']);
$password = trim($_POST['password']);
$sql = "SELECT * from users where username = ? LIMIT 1 ";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
    echo "The error was about fetching";
}else{
    mysqli_stmt_bind_param($stmt,"s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($result)){
        $pwdcheck = password_verify($password, $row['password']);
        if($pwdcheck == false){
            echo "<script>
				alert('The password is wrong');
				window.location.href='http://localhost/salon/Login/login.html';	</script>";
            exit();
        }else if($pwdcheck == true){
            $_SESSION['username'] = $row['username'];
            $_SESSION['email-id'] =  $row['email'];
            $_SESSION['loggedid'] = true;
            if($row['username']=='admin'){
                header('location: http://localhost/salon/admin_panel.php');
                exit();
            }else{
            header('Location: http://localhost/salon');
            exit();
            }
        }
        else{
            echo "The password is wrong";
        }
    }else{
        echo "error fetching rows";
    }
}
mysqli_close($conn);
}
?>
