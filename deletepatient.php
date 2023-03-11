<?php
$pid = $_GET['pid'];

$con = mysqli_connect("localhost", "root", "", "keepfit");
if($con){
  $del="DELETE FROM `users` WHERE `Patient_id` = ".$pid."";
  $con->query($del);
}
?>