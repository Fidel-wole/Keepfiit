<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
    include './header.php'
?>
    <section>
        <div class="head">
            <p>Home Page <span>Dashboard</span></p><hr>
        </div>
        <div class="card">
<div class="card-con">
    <a href=""> <img src = "icon/hospital.png">
        <p>4<br>DOCTORS</p></a>
</div>
<div class="card-con">
   <a href="appointment.php"><img src = "icon/hospital.png">
    <p>Make<br>Appointment</p></a> 
</div>
<div class="card-con">
    <a href=""> <img src = "icon/hospital.png">
        <p>4<br>DOCTORS</p></a>
</div>
<div class="card-con">
   <a href=""> <img src = "icon/hospital.png">
    <p>4<br>DOCTORS</p></a>
</div>
        </div>
        <h3 style="font-family:sans-serif; color: gray; padding: 20px; padding-left: 30px;">Appointment Management</h3>
   <div class="pending">
    <p style="padding: 17px; color:rgb(111, 111, 247); font-weight:bold;font-family: sans-serif; background-color:rgb(242, 244, 252);">Appointment List</p>
    <table>
        <tr>
            <th>S/N</th>
            <th>Name</th>
            <th>Appointment Type</th>
            <th>Doctor Name</th>
            <th>Appointment Date</th>
            <th>Appointment Time</th>
            <th>Appointment Day</th>
            <th>Appointment Status</th>
            <th>View</th>
    </tr>
    <?php
    $con = mysqli_connect("localhost", "root", "", "Keepfit");
    if($con){

$sql = "SELECT * FROM users INNER JOIN appointment ON users.Patient_id = appointment.Patient_id Where users.id = " . $_SESSION['id'];
$result =$con->query($sql);
    
if ($result->num_rows > 0){
    $n = 1;
    while($row = $result->fetch_assoc()){
        echo '
        <tr>
        <td>'.$n.'</td>
        <td>'.$row["Full_name"].'</td>
        <td>'.$row["Appointment_Type"].'</td>
        <td>'.$row["Doctor's_Name"].'</td>
        <td>'.$row["Appointment_Date"].'</td>
        <td>'.$row["Appointment_Time"].'</td>
        <td>'.$row["Appointment_Day"].'</td>
        <td><p>'.$row["Appointment_Status"].'</p></td>

    </tr>
        ';
        $n++;
    }
}
    }
    
    ?>

   </div>     
    </section>

    <!-- <script>
        document.getElementById("nav").addEventListener("click", function(){
            document.getElementById("navbar").style.display="none";
            
        }) -->
        
        </script>
</body>
</html>