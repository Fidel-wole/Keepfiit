<?php
$pid = $_GET['pid'];

$con = mysqli_connect("localhost", "root", "", "keepfit");
if($con){
    $sql = "UPDATE `appointment` SET `Appointment_Status`='Approved' WHERE `Patient_id` =  ".$pid;
    $con->query($sql);
}

$_SESSION['msg']= "appoiontement approved";

header("Location:adminappointment.php");

?>