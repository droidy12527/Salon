<?php
require_once 'config.php';
  session_start();
  if(isset($_SESSION['loggedid'])){
    if(isset($_SESSION['mail-sent'])){
      echo '<script>
      alert("The mail has been already sent from your account please check back later");
      </script>';
    }else{
    //$message = $_POST[''];
    //send email using smtp protocol and php mailer
    require('composer/vendor/phpmailer/phpmailer/src/PHPMailer.php');
    require('composer/vendor/phpmailer/phpmailer/src/SMTP.php');
    require('composer/vendor/phpmailer/phpmailer/src/Exception.php');
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); 

    $mail->CharSet="UTF-8";
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPDebug = 1; 
    $mail->Port = 465 ; 

     $mail->SMTPSecure = 'ssl';  
    $mail->SMTPAuth = true; 
    $mail->IsHTML(true);

    
    $mail->Username = "hackerbadshah1010@gmail.com";
    $mail->Password = "xdahackeranddeveloper";

    
    $mail->SetFrom("gundiaramasu@gmail.com");
    $mail->AddAddress("gundiaramasu@gmail.com");
    $mail->Subject = "Your appointment has been booked sucessfully";
    $mail->Body = "Your order id is ";


     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        $_SESSION['mail-sent'] = true;
        echo "<script>
          alert('Please check your email. Your appointment has been sucessfully booked');
          window.location.href='http://localhost/salon/index.php?set-button=Appointment#navigate-here';
        </script>";
     }
    }


  }else{
    echo "<script>
    alert('Please Login to send us an Appointment Notification.');
    window.location.href='http://localhost/salon/index.php?set-button=Appointment#navigate-here';
</script>";
  }
?>
