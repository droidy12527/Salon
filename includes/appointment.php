<?php
require_once 'config.php';
  session_start();
  if(isset($_SESSION['loggedid'])){
    //send email is pending still

  }else{
    echo "<script>
    alert('Please Login to send us an Appointment Notification.');
    window.location.href='http://localhost/salon/index.php?set-button=Appointment#navigate-here';
</script>";
  }
?>
