
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
ul a{
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
            width: 60%;
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
            margin-top: 20px;
            transform: translateX(300PX);
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
        #error{
            color:red;
            padding: 0px;
            padding-bottom: 0;
            display: none;
            font-size: 14px;
        }
    </style>
        <!-- <?php
        if ($password_error != null){
       ?><style>.error{display: block;}</style><?php
       
       } ?> -->
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
    <section class="register">
        <h2>Register User</h2>
        <?php
        if(isset($_SESSION["mesg"])){
        echo $_SESSION["mesg"];}
        ?>
                <form class="form" action="check-signup.php"  method="post" onsubmit="form()" >
                    <div class="form-con">
                        <p>Fill in the user details below  </p>
                        <input type="text" placeholder="Fullname" name = "fname" required><p>
                        <input type="email" placeholder="Email" name = "email" required><p></p>
                        <input type="number" placeholder="Phone number" name="phone" id="phone"><p>
                            <div id="error"></div>
                        <input type= "date"  placeholder="Date of birth" name = "dob"><p></p>
                        <input type="number" placeholder="Age" name="age" id="age"><p></p>
                        <label>Gender</label>
                        <input type="radio" value ="Male" name="gender">Male
                        <input type="radio" value="Female" name="gender">Female<p></p>
                        <input type = "text" placeholder="Address" name="address" id="add"><p></p>
                        <button name="submit">Next</button>
                    </div>
                    <div class="form-con">
                        <p>Fill in user Medical Information</p>
                        <input type="text" placeholder="Ailment" name="ailment">
                        <input type = "text" placeholder="Herediatary" name= "heredit"><p></p>
                        <input type="text" placeholder="Blood type" name="bloodtype"><p></p>
                        <input type = "text" placeholder="Height" name="height"><p></p>
                        <textarea placeholder="Others" row = "3"></textarea>
                    </div>
                    <div>
                        <p>Create User Username and Password</p>
                        <input type="text" placeholder="Username" name="uname">
                        <input type = "text" placeholder="Password" name= "pass"><p></p>
                        <input type = "text" placeholder="Confirm Password"><p></p>
                        <label>Usertype<label>
                            <input type="radio" value="user" name="usertype">User
                            <input type="radio" value="admin" name="usertype">Admin
                            <!-- <p class="error"><?php
            echo $password_error;
            ?></p> -->
                    </div>
            </form>
    </section>
    <script>
        function form(){
        var phone = document.getElementById("phone").value;
        var age = document.getElementById("age").value;
        var add = document.getElementById("add").value;
        if(phone.length < 11){
             document.getElementById("error").innerHTML="Phone number invalid";
             document.getElementById("error").style.display="block";
             event.preventDefault(onsubmit);
        }
        if( add == ""){
            alert("fill all");
            event.preventDefault(onsubmit);
        }
    }
        </script>
</body>
</html>