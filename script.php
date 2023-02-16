<?php
$uname = null;
$pass = null;
$password_error = null;

if(isset($_POST["submit"])){
    $uname= $_POST['uname'];
    $pass = $_POST['pass'];

    $con = mysqli_connect("localhost", "root", "", "keepfit");
    if(!$con){
        die("Connect failed; ". mysqli_connect_error());
    }else{
        $sql = "SELECT * FROM users WHERE Username = '$uname'";
        $result = $con->query($sql);
        if($result->num_rows == 1){
            while($row = $result->fetch_assoc()){
                if($row['Password'] == $pass){
                    session_start();
                    $_SESSION['id'] = $row['id'];
                    if($row['Usertype'] == 'admin') {
                        header("location: admindashboard.php");
                    } else {
                        header("location: dashboarrd.php");
                    }
                }else{
                    if ($pass != $row["Password"]) {
                        $password_error =  "Incorrect Password or Username";
                    }
                }
            }
        }else{
            $password_error = "Incorrect Username or Password";
        }
    }
}
?>