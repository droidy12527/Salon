<?php
require_once 'config.php';
$message = '';
$message = $_POST['message'];
$firstname = $_POST['first-name'];
$lastname = $_POST['last-name'];
$date = $_POST['date'];
$phone = $_POST['phn-no'];
$time = $_POST['time'];
echo "The contents are".$message.$firstname.$lastname.$date.$phone.$time;

?>