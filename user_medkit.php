<?php
$con= mysqli_connect("localhost", "root", "", "keepfit");
if($con){
    $sql = "SELECT * FROM users INNER JOIN users_medkit ON users.Patient_id = users_medkit.Patient_id";
    $result  =$con->query($sql);
    if($result->num_rows == 1){
      $usermed = $result->fetch_assoc();

    }
} 
?>