
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
     
</head>
<body>
    <header id="navbar">
        
   <div class="img">
    <img src ="icon/images (35).jpeg">
    <?php
    session_start();
    $con = mysqli_connect("localhost", "root", "", "keepfit");
if($con){
    
    $sql = "SELECT * FROM `users`INNER JOIN users_medkit ON users.Patient_id = users_medkit.Patient_id Where users.id = " . $_SESSION['id']."";
    $result = $con->query($sql);
    if ($result->num_rows == 1){
        $userdetails = $result->fetch_assoc();
        echo '
        <span>Welcome ' . $userdetails["Username"] . ' </span>
        
        
        ';
        
    }
    
} ?>
   </div>
   <div class="id">
   <span style="margin-left: 25%; padding:20px;">ID: <?php echo  $userdetails['Patient_id'] ?></span><br>
</div>     
   <ul>
   <a href="admindashboard.php"><div class="flexicon"><img src="icon/database.png" class="icon"><li>Dashboard</li></div></a>
           
   <a href="adminappointment.php"><div class="flexicon"><img src="icon/deadline.png" class="icon"> <li>Appointments</li></div></a>
            <a href="adminprofile.php"> <div class="flexicon"><img src="icon/checked.png" class="icon"><li>Profile</li></div></a>
            <a href="adminpatient.php"><div class="flexicon"><img src="icon/checked.png" class="icon"> <li>View Patients</li></div></a>
            <a href = "registerpatient.php"<div class="flexicon"><img src="icon/database.png" class="icon"> <li style="list-style: none; padding-left:10px ;">Register Patient</li></div></a>
            <div class="flexicon" id="log"><img src="icon/log-out.png" class="icon"> <li style="list-style: none; padding-left:10px ;">Log out</li></div>
        </ul>
    </header>
    <script>
        document.getElementById("log").addEventListener("click", function(){
            confirmvalue = confirm("Are Sure you want to log out");
            if(confirmvalue  ==true){
             window.location.assign("index.php");
            }
            
        })
    </script>
</body>