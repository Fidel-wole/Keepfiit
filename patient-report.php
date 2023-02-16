<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record</title>
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
                padding: 5px;
                margin-bottom: 0;
                margin-left: -5%;
                 height: 5vh;
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
            .record{
                margin: 3%;
            }
             .patient-info{
                margin-top: 20px;
                display: flex;
             }
            .profileimg img{
                border-radius: 200px;
                width: 150px;
                height: 150px;
            }
            .patient-info h3{
                font-weight: bolder;
                font-size: 30px;
                font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;
            }
            .name{
                padding-left: 30px;
                padding-top: 30px;
            }
            button{
                margin-top: 15px;
                padding: 6px;
                width:100px;
                background-color: rgb(38, 174, 184);
                border: none;
                border-radius: 5px;
                outline: none;
                color:white;
                cursor: pointer;
            }
            .list{
                margin-left: 20%;
                font-size: 15px;
                margin-top: 40px;
                font-family: sans-serif;
                border-left: 1px solid rgb(206, 201, 201);
                
            }
            .list li{
                color:gray;
                padding-bottom: 10px;
            }
            .list span{
                color: black;
                padding-left: 7px;
            }
            </style>
</head>
<body>
    <?php
    include("header.php")
    ?>
        <section class="section">
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
            <div class="record">
            <p style="font-weight: bold; font-family:sans-serif;">Your record's</p>
             <div class="patient-info">
                <div class="profileimg">
                <img src = "icon/images (35).jpeg">
        </div>
        <div class="name">
                 <h3 style="font-weight: bolder ;">Patient</h3> 
                 <p style="font-size: 20px;"><?php echo "Miss ".$userdetails["Full_name"]."" ?></p>
                  <button>View Profile</button>
                 </div>  
                 <ul class="list">
                    <li>Sex:<span>Female</span><li>
                    <li>Age:<span>17</span><li>
                    <li>Blood:<span>B+</span><li>

                 </ul>
                 <ul class="list">
                    <li>Check-in:<span>15 Feb 2023</span><li>
                    <li>Ailment:<span>Diabetes</span><li>
                    <li>Status<span>Normal</span><li>

                 </ul>
        </div>
</section>
</body>
</html>