<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        #style{
            width: 50%;
            box-shadow: 0px 0px 20px 4px rgba(0,0,0,0.1);
            margin-left: 30px;
            border-radius: 20px;
            height: 50vh;
        }
        @media screen {
            #style{
                width: 100%;
            }
        }
        #style:nth-child(2){
            width: 40%;
            height: 50vh;
        }
        @media screen {
            #style:nth-child(2){
                width: 100%;
            }
        }
        .flex{
            display: flex;
        }
        @media screen and (max-width:750px) {
            .flex{
                display: block;
            }
        }
        #line2{
            display: flex;
            justify-content: space-around;
            margin-left: 30px;
            width: 100%;
            height: 30%;
            margin-top: 5%;
            box-shadow: 0px 0px 20px 4px rgba(0,0,0,0.1);
        }
        #line{
            width: 100%;
        }
        </style>
</head>
<body>
<?php

    include './adminheader.php'
?>
    <section>
        <div class="head">
            <p>Home Page <span>Dashboard</span></p><hr>
        </div>
        <div class="card">
<div class="card-con">
    <a href=""> <img src = "icon/hospital.png">
        <p>Assitant<br>DOCTORS</p></a>
</div>
<div class="card-con">
   <a href=""><img src = "icon/hospital.png">
    <p>View<br>Patients</p></a> 
</div>
<div class="card-con">
    <a href=""> <img src = "icon/hospital.png">
        <p>View<br>Messages</p></a>
</div>
<div class="card-con">
   <a href=""> <img src = "icon/hospital.png">
    <p>View<br>Profile</p></a>
</div>
        </div>
        <div class="flex">
        <div id="style">
  <canvas id="myChart"></canvas>
</div>
<div id="style">
<canvas id="polar"></canvas>
    </div>
    </div>
    <div id="line2">
    <canvas id="line"></canvas>
    <canvas id="dough"></canvas>
    </div>
    </section>
        <script src="path/to/chartjs/dist/chart.umd.js"></script>
<script>
    const myChart = new Chart(ctx, {...});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 <script src="my_chart.js"></script>
</body>
</html>