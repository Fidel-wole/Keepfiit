<?php
$patientid = $_POST["patientid"];
$username = $_POST["username"];
$appointmentType = $_POST["appointment-type"];
$doctorName = $_POST["doctor-name"];
$appointmentDate = $_POST["appointment-date"];
$appointmentTime = $_POST["appointment-time"];
$appointmentDay = $_POST["appointment-day"];
  
$con = mysqli_connect("localhost", "root", "", "Keepfit");
if($con){
    $sql = "INSERT INTO `appointment`(`Patient_id`, `Username`, `Appointment_Type`, `Doctor's_Name`, `Appointment_Date`, `Appointment_Time`, `Appointment_Day`)
     VALUES ('$patientid', '$username','$appointmentType','$doctorName','$appointmentDate','$appointmentTime','$appointmentDay')";
    $con->query($sql);
    header("location:dashboarrd.php");
}else{
    echo ("die: Connection Failed");
}
?>