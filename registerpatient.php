<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register user </title>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
        header{
    background:linear-gradient( rgb(38, 174, 184), pink);
    width: 16%;
    margin-top: 0;
    color: white;
    position: fixed;
    height: 120vh;
    
}
header img{
    width: 50px;
    height: 50px;
    border-radius: 100px;
    
}
header  .img{
    display: flex;
    margin-bottom: -20px;
    padding-right: 10px;
    margin-top: 20px;
    padding-left: 20px;

   
}
.img span{
    margin-top: 5px;
    padding-left: 5px;
}
header .id{
    margin-top: 15px;
}
header
.flexicon{
    display: inline-flex;
    margin-top: 25px;
    margin-left: -1px;
    padding: 13PX;
    width: 100%;

}
/* .flexicon:nth-child(2){
    border-left: 3px solid white; */

.icon{
    width: 15px;
    height: 15px;

}
ul li{
    list-style: none;
    padding-left: 10px;
    cursor: pointer;
}
ul li a{
    text-decoration: none;
    color: white;
}
.flexicon:hover{
    background-color: rgb(40, 41, 41);
    border-left: 3px solid rgb(66, 65, 65);
    transition: 0.5s;
       color: rgb(255, 253, 253);
       border-left: 3px solid white;
}
        .register h2{
            text-align: center;
            padding-top: 5%;
        }
        .form{
            box-shadow: 0px 0px 11px 11px rgba(0, 0, 0, 0.1);
            transform: translate(50%);
            margin-top: 2%;
            width: 50%;
            padding: 15px;
        }
        .form{
            display: flex;
            justify-content: space-around;
            gap:20px;
        }
        input{
            padding: 5px;
            margin-top: 10px;
        }
        p{
            font-size:20px;
        }
        textarea{
            margin-top: 10px;
        }
        button{
            padding:7px;
            width: 100%;
            margin-top: 10px;
            margin-left: 70%;
            border-radius: 10px;
            outline: none;
            border:none;
            background-color: rgb(38, 174, 184);
            color: white;
        }
        .form-con{
            border-right:1px solid grey;
            padding-right: 50px;
        }
    </style>
</head>
<body>
<header id="navbar">
        
        <div class="img">
         <img src ="icon/images (35).jpeg">
         <?php
         session_start();
         $con = mysqli_connect("localhost", "root", "", "keepfit");
     if($con){
         
         $sql = "SELECT * FROM `users` Where users.id = " . $_SESSION['id'];
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
        <span style="margin-left: 25%; padding:20px;">ID: <?php echo" ". $userdetails['Patient_id'] ." "?></span><br>
     </div>     
        <ul>
                 <div class="flexicon"><img src="icon/database.png" class="icon"> <li><a href="admindashboard.php">Dashboard</a></li></div>
                
                 <div class="flexicon"><img src="icon/deadline.png" class="icon"> <li><a href="">Appointments</a></li></div>
                 <div class="flexicon"><img src="icon/checked.png" class="icon"> <li><a href="adminpatient.php">View Patients</a></li></div>
                 <div class="flexicon"><img src="icon/database.png" class="icon"> <li style="list-style: none; padding-left:10px ;"><a href = "register.php">Register Patient</a></li></div>
                 <div class="flexicon"><img src="icon/log-out.png" class="icon"> <li style="list-style: none; padding-left:10px ;" id="log">Log out</li></div>
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
    <section class="register">
        <h2>Register User</h2>
                <form class="form">
                    <div class="form-con">
                        <p>Fill in the user details below  </p>
                        <input type="text" placeholder="Fullname"><p>
                        <input type="email" placeholder="Email"><p></p>
                        <input type="number" placeholder="Phone number"><p>
                        <input type= "date"  placeholder="Date of birth"><p></p>
                        <input type="number" placeholder="Age"><p></p>
                        <label>Gender</label>
                        <input type="radio" value ="">Male
                        <input type="radio" value="">Female<p></p>
                        <input type = "text" placeholder="Address"><p></p>
                        <button>Submit</button>
                    </div>
                    <div>
                        <p>Fill in user Medical Information</p>
                        <input type = "text" placeholder="Herediatary"><p></p>
                        <input type="text" placeholder="Blood type"><p></p>
                        <input type = "text" placeholder="Height"><p></p>
                        <textarea placeholder="Others" row = "3"></textarea>
                    </div>
            </form>
    </section>
</body>
</html>