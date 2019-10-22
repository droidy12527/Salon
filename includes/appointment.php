<?php
require_once 'config.php';
  session_start();
  if(isset($_POST['appointment_booking'])){
  if(isset($_SESSION['loggedid'])){
    if(isset($_SESSION['mail-sent'])){
      echo '<script>
      alert("The mail has been already sent from your account please check back later");
      </script>';
    }
    else{
    $email = $_SESSION['email-id'];
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

    $randomNumber = rand();
    $sql = "INSERT INTO appointment (appointment_id) VALUES ('$randomNumber')";
    $mail->SetFrom("hackerbadshah1010@gmail.com");
    $mail->AddAddress($email);
    $mail->Subject = "Your appointment has been booked sucessfully";
    $mail->Body = "Your appointment id is ".$randomNumber;
    mysqli_query($conn, $sql);


     if(!$mail->Send()) {
        echo '<script>
        alert("There was problem connecting to the internet");
        </script>';
     } else {
        $_SESSION['mail-sent'] = true;
        echo "<script>
          alert('Please check your email. Your appointment has been sucessfully booked');
          window.location.href='http://localhost/salon/appointment.php';
        </script>";
     }
    }


  }else{
    echo "<script>
    alert('Please Login to send us an Appointment Notification.');
    window.location.href='http://localhost/salon/appointment.php';
</script>";
  }
}

if(isset($_POST['first-name'])){
  $query = "select * from appointment";
  $i = 0;
  $found = false;
  $result = mysqli_query($conn,$query);
  $number = $_POST['first-name'];
  while($row = mysqli_fetch_array($result)){
      $i++;
      if($number == $row[0]){
        $found = true;
        break;
      }
    }
    if($found == true){
      echo 'You are '.$i.' In our list';
    }
    else{
      echo 'There is no such kind of appointment id registered with us';
    }
  } 
?>