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
                background-color: white;
                width: 85vw;
                display: flex;justify-content: space-around;
                border-bottom: 1px solid grey;
                padding-bottom: 10px;
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
                width: 50px;
                height: 50px;
            }
            .image h2{
              color: grey;
              font-size: 18px;
              padding-top: 15px;
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
                <input type="text" placeholder="Search" class="Search">
                <div class="message">
                <img src = "icon/pencil.png">
                </div>
                <div class=image>
                    <img src="icon/images (35).jpeg">
<h2><?php echo "".$userdetails["Username"]."";?></h2>
</div>
</div>
<h3 style="font-family:sans-serif; color: gray; padding: 30px;">Patient Management</h3>
   <div class="pending">
    <p style="padding: 17px; color:rgb(111, 111, 247); font-weight:bold;font-family: sans-serif; background-color:rgb(242, 244, 252);">Patient List</p>
    <table style="margin-left: 1%;">
        <tr>
            <th>S/N</th>
            <th>Name</th>
            <th>Patient id</th>
            <th>Email</th>
            <th>Username</th>
            <th>Phone_number</th>
            <th>Address</th>
            <th>View patient</th>
            <th>Action</th>
    </tr>
    <?php
    $con = mysqli_connect("localhost", "root", "", "Keepfit");
    if($con){

$sql = "SELECT * FROM users ";
$result =$con->query($sql);
    
if ($result->num_rows > 0){
    $n = 1;
    while($row = $result->fetch_assoc()){
        echo '
        <tr>
        <td style="text-align:center;">'.$n.'</td>
        <td>'.$row["Full_name"].'</td>
        <td>'.$row["Patient_id"].'</td>
        <td>'.$row["Email"].'</td>
        <td>'.$row["Username"].'</td>
        <td>'.$row["Phone_number"].'</td>
        <td>'.$row["Address"].'</td>
        <td><form class = "form22">
            <button type = "submit"  style="background-color:green; color:white;" id="button" >View</button>
        </form> </td>
        <td><form class = "form22" >
        <button type = "submit"  style="background-color:red; color:white;" id="button">Delete</button>
    </form> </td>
    </tr>
        ';
        $n++;
    }
}
    }
    
    ?>

   </div>     
    </section>
</body>
</html>