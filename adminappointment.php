<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .section{
                margin-left: 16%;
               background-color: white;
            }
            .header{
                margin-left: 20px;
                background-color: white;
                width: 85vw;
                display: flex;justify-content: space-around;
                border-bottom: 1px solid grey;
                padding-bottom: 10px;
                position: fixed;
                z-index: 99;
                max-height: 7vh;
            }
            .Search
            {
                height: 5vh;
                padding: 5px;
                margin-bottom: 0;
                margin-left: -5%;
                width: 30%;
            }
            .message{
               margin-top: 7px;
                width: 5%;
                height: 50%;
        
            }
            .image{
                display: flex;
            }
            .image img{
                border-radius: 100%;
                width: 40px;
                height: 40px;
            }
            .image h2{
              color: grey;
              font-size: 18px;
              padding-top: 12px;
              padding-left: 6px;  
            }
            #button{
                width: 100%;
                padding: 10px;
                background-color: lightgreen;
            }
    </style>
</head>
<body>
    <?php
    include ("adminheader.php");
    ?>
    <section>
    <div class="header">
                <input type="text" placeholder="Search" id = "search" class="Search">
                <script>
                    search = document.getElementById("search");
                    search.addEventListener("Keyup", (event)=>{
                        document.querySelectorAll(".searchable").forEach((e)=>{
                            e.style.display="none"
                    });
                     if(document.getElementById("search.value")){
                        document.getElementById("search.value").style.display="block"
                     }else{
                        document.querySelectorAll(".searchable").forEach((e)=>{
                            e.style.display="block"
                     });
                }})
                    </script>
                <div class="message">
                <img src = "icon/pencil.png">
                </div>
                <div class="image">
                    <img src="icon/images (35).jpeg">
<h2><?php echo "".$userdetails["Username"]."";?></h2>
</div>
</div>
<h3 style="font-family:sans-serif; color: gray; padding: 30px; padding-top:70px;">Appointment Management</h3>
   <div class="pending">
    <p style="padding: 17px; color:rgb(111, 111, 247); font-weight:bold;font-family: sans-serif; background-color:rgb(242, 244, 252);">Appointment List</p>
    <table>
        <thead>

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
        </thead>
        <tbody>
    <?php
    $con = mysqli_connect("localhost", "root", "", "Keepfit");
    if($con){

$sql = "SELECT * FROM users INNER JOIN appointment ON users.Patient_id = appointment.Patient_id";
$result =$con->query($sql);
    
if ($result->num_rows > 0){
    $n = 1;
    while($row = $result->fetch_assoc()){
        echo '
        <tr>
        <td>'.$n.'</td>
        <td id= "searchable">'.$row["Full_name"].'</td>
        <td>'.$row["Appointment_Type"].'</td>
        <td>'.$row["Doctor's_Name"].'</td>
        <td>'.$row["Appointment_Date"].'</td>
        <td>'.$row["Appointment_Time"].'</td>
        <td>'.$row["Appointment_Day"].'</td>
        <td><form class = "form22">
            <a href="updatestatus.php?pid='.$row["Patient_id"].'" class = '. $row["Appointment_Status"] . ' id="but", onclick ="click()">
            Change Status</a>
        </form> </td>

    </tr>
        ';
        $n++;
    }
}
    }
    
    ?>
        </tbody>
</table>

   </div>     
    </section>
    <script>
        function click() {
            const btn = document.getElementById("but").forEach(btn => {
            btn.textContent ="Approved";
            })
        }
      
        </script>
</body>
</html>