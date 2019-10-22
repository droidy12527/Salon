<?php
require_once 'config.php';
$appointment_id = $_POST['first-name'];
$sql = "delete from appointment where appointment_id = '$appointment_id'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header('location: http://localhost/salon/admin_panel.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>