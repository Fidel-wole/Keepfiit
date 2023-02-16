<?php
$fullname = $_POST["fname"];
$email = $_POST["email"];
$username = $_POST["uname"];
$password = $_POST["pass"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$dob = $_POST["dob"];
$age = $_POST["age"];
$patientid = rand(10000000, 90000000);

$con = mysqli_connect("localhost", "root", "", "Keepfit");
if ($con) {
    $check = "SELECT * FROM users WHERE Username = '$username' AND Email = '$email'";
    $result = $con->query($check);
    if ($result->num_rows == 1) {
        while ($row = $result->fetch_assoc()) {
            if ($row["Username"] == $username) {
                echo 'This user already exist';
            }
        }
    } else {
        $sql = "INSERT INTO `users`(`Full_name`, `Username`, `Date-of-birth`, `Age`, `Email`, `Phone_number`, `Patient_id`, `Password`, `Address`)
     VALUES ('$fullname', '$username', '$dob', '$age', '$email','$phone','$patientid','$password','$address')";
      $con->query($sql);
        header("location:admindashboard.php");
    }
}else{
    echo ("die: Connection Failed");
}
?>