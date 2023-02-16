<?php
require("script.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgb(219, 216, 216);
            padding: 33px;
            background-image: url("images/gradient.jpeg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        .loader{
            background: white;
    height: 150vh;
    width: 100%;
    position: fixed;
    z-index: 100;
}

.body-pa{
    width:100%;
    height: 100%;
    background: white;
}
.text{
    color: white;
     text-align: center;
  transform: translateY(70vh);
  letter-spacing: .5rem;
  font-size: 20px;
  font-weight: 900;
  font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  animation: text 2s ease-in-out infinite;
  animation-fill-mode: forwards;
}
@keyframes text{
    50%{
       color:rgb(91, 188, 233);
    }
}
        .parent{
            display:flex;
            justify-content: space-between;
            background-color: white;
            padding: 10px;
            padding-right: 0;
            width: 70%;
            height: 80vh;
            border-radius: 10px;
            box-shadow: 0px 0px 20px 0px rgba(173, 169, 169, 0.6);
        }
        .sider{
            background: linear-gradient(rgb(38, 174, 184), pink);
            padding: 70px;
            width: 420px;
            color: white;
            font-family: sans-serif;
        }
        .sider-info h3{
            font-size: 25px;
            animation: anime 5s ease-in-out infinite;
        }
        ul{
            margin-top: 50px;
            margin-left: 10px;
        }
        ul li{
            padding-bottom: 40px;
        }
        form{
            background-color: white;
            margin-right: 10%;
            width: 33%;
            margin-top: 30px;
        }
        form img{
            width:20%;
            margin-left: 40%;
            margin-bottom: 30px;
        }
      h2{
        text-align: center;
        font-family: sans-serif;
        margin-bottom: 20px;
        color:rgb(38, 174, 184);
        font-weight: lighter;
      }
        input{
            padding: 10px;
            margin-top: 10px;
            border-color: rgb(38, 174, 184);
            width:100%;
            outline: none;
        }
        .log{
            text-align: center;
            font-size: 14px;
            padding-bottom: 6px;
        }
        .welcome{
            background-color: rgb(219, 216, 216);
            padding: 20px;
        }
        .pass{
            margin-top: 10px;
            margin-left: 62.5%;
            color:rgb(38, 174, 184);
        }
        #pass{
            margin-top: 0;
            margin-bottom: 1px;
        }
        .dont{
            margin-bottom: 10px;
            color: rgb(38, 174, 184);
        }
        button{
            padding:8px;
            width:100%;
            font-size: 15px;
            outline: none;
           transition: 0.5s;
           border: none;
        }
        button:hover{
            background-color:rgb(38, 174, 184);
            color: white;
        }
        .error{
            color:red;
            background-color: #fde8ec;
            padding: 10px;
            display: none;
            font-size: 14px;
        }
        #error1{
            color: red;
            text-align: start;
}
#error2{
            color: red;
            text-align: start;
}
        @media screen and (max-width:750px){
            .parent{
                display: block;
                height: 100%;
                width: 400px;
            }
            .sider{
                width: 97%;
            }
            form{
                margin-right: 50%;
                width:100%;
                padding: 40px;
            }
            form img{
                width: 35%;
                margin-left: 30%;
            }
            h2{
                font-size: 20px;
                font-weight: 400;
            }
            .pass{
                font-size: smaller;
                margin-left: 200px;
                margin-top: 20px; ;
            }
        }
    </style>
    <?php
        if ($password_error != null){
       ?><style>.error{display: block;}</style><?php
       
       } ?>
</head>
<body>
    <div class="loader" id="loader">
        <div class="body-pa">
            <div class="text">
             <h1>Keepfit</h1>
            </div>
    </div>
    </div>
    <div class = "parent">
    <div class="sider">
         <div class="sider-info">
            <h3>Expert advice from top doctors</h3>
            <ul>
                <li>Expert advice from our top doctors</li>
                <li>Available 24/7 on any device</li>
                <li>Private questions answered within 24 hours</li>
            </ul>

         </div>
    </div>
    <form method="post"  class="forma" >
        <div >
            <img src="icon/hospital.png">
            <p class="error"><?php
            echo $password_error;
            ?></p>
            <h2>Welcome Back</h2>
            <p class="log">Log in to your account and we'll get you in to see our doctors</p>
            <p class="welcome" id="welcome">Welcome</p>
            <input type="text" name="uname" placeholder="Username" id="username">
        <div id="error1"></div>
            
            <p class="pass">Forgot password</p>
            <input type = "password" placeholder="Password" id="pass" value="<?php
            echo $uname;
            ?>" name="pass">
            <div id="error2"></div>
            <p class="dont">I don't have an account</p>
            <button name = "submit" id="button" onclick="check()">Log in</button>
        </div>
        
    </form>
    </div>
    <script>
        var loader = document.getElementById("loader");
window.addEventListener("load", function(){
loader.style.display="none"})

        function check(){
            var username = document.getElementById("username").value;
            var pass = document.getElementById("pass").value;
        if(username == ""){
            document.getElementById("error1").innerHTML = "Username Required";
            event.preventDefault(onsubmit)
        }else{
            document.getElementById("welcome").textContent = "Welcome " + username;
            document.getElementById("error1").innerHTML = "";
        }
        if(pass == ""){
            document.getElementById("error2").innerHTML = "Password Required";
            event.preventDefault(onsubmit)
        }else{
            document.getElementById("error2").innerHTML = "";
        }

    
        }
        </script>
</body>
</html>