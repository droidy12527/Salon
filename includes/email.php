<?php
require('composer/vendor/phpmailer/phpmailer/src/PHPMailer.php');
require('composer/vendor/phpmailer/phpmailer/src/SMTP.php');
require('composer/vendor/phpmailer/phpmailer/src/Exception.php');
$mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); 

    $mail->CharSet="UTF-8";
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPDebug = 1; 
    $mail->Port = 465 ; //465 or 587

     $mail->SMTPSecure = 'ssl';  
    $mail->SMTPAuth = true; 
    $mail->IsHTML(true);

    //Authentication
    $mail->Username = "hackerbadshah1010@gmail.com";
    $mail->Password = "xdahackeranddeveloper";

    //Set Params
    $mail->SetFrom("gundiaramasu@gmail.com");
    $mail->AddAddress("gundiaramasu@gmail.com");
    $mail->Subject = "Your appointment has been booked sucessfully";
    $mail->Body = "Your order id is ";


     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }

?>