<?php
session_start();
$password_error = null;
$username = null;
$fullname = $_POST["fname"];
$email = $_POST["email"];
$username = $_POST["uname"];
$password = $_POST["pass"];
$passhash = password_hash($password, PASSWORD_DEFAULT);
$usertype = $_POST["usertype"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$age = $_POST["age"];
$ailment = $_POST["ailment"];
$bloodtype = $_POST["bloodtype"];
$heredit = $_POST["heredit"];
$height = $_POST["height"];
$patientid = rand(10000000, 90000000);
$id =$patientid;
$usertype = $_POST["usertype"];

$con = mysqli_connect("localhost", "root", "", "Keepfit");
if ($con) {
    $check = "SELECT * FROM users WHERE Username = '$username' AND Email = '$email'";
    $result = $con->query($check);
    if ($result->num_rows == 1) {
        while ($row = $result->fetch_assoc()) {
            if ($row["Username"] == $username) {
                echo  "User Already Exist";
                header("location: registerpatient.php");
            }
        }
    } else {
        $sql = "INSERT INTO `users`(`Full_name`, `Username`, `Date-of-birth`, `Gender`, `Age`, `Email`, `Phone_number`, `Patient_id`, `Password`, `Address`, `Usertype`)
     VALUES ('$fullname', '$username', '$dob', '$gender', '$age', '$email','$phone','$id','$passhash','$address', '$usertype')";
      $con->query($sql);
    }
        
}

if ($con) {
    $nxt = "INSERT INTO `users_medkit`(`Name`, `Patient_id`, `Ailment`, `Blood_type`, `Herediatary`, `Height`) 
        VALUES('$fullname', '$id', '$ailment', '$bloodtype', '$heredit', '$height')";
        $con->query($nxt);
        $_SESSION["mesg"] = "User Account Created Sucessfully";
        header("location: adminpatient.php");
}
else{
    echo ("die: Connection Failed");
}
?>