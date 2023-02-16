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
    include 'header.php'
        ?>
    <section>
        <div class="title-page">
            <div class="title">
                <h2 style="text-align:center; margin-bottom: 15px;">Book an apppointment with us today</h2>
                <p style="font-size:15px;">Connect With Our Professional And Well Experienced Doctors Today,
                    <br> Check Out The Available Appointments Below And Choose The One Fit For You
                </p>
            </div>
        </div>
        <div class="week-schedule">
            <div class="week">
                <p>This Week</p>
                <p>
                    <script>document.write(new Date)</script>
                </p>
            </div>
            <div class="week">
                <p>Appointments</p>
                <p>3</p>
            </div>
            <div class="week">
                <h3 style="font-weight:lighter; color:grey;">$100</h3>
                <p>Paid</p>
            </div>
        </div>
        <h2 style="text-align:center; color:rgb(38, 174, 184); font-family:sans-serif; margin: 10px 10px;">This Week
            Appointments</h2>
        <div class="available">
            <div class="available-con">
                <h2>Teeth Whitening</h2>
                <p>Let,s make your teeth sparkle</p>
                <button class="bt">Book</button>

            </div>
            <div class="available-con">
                <h2>Teeth Whitening</h2>
                <p>Let,s make your teeth sparkle</p>
                <button class="bt">Book</button>
            </div>
            <div class="available-con">
                <h2>Teeth Whitening</h2>
                <p>Let,s make your teeth sparkle</p>
                <button>Book</button>
            </div>
            <div class="available-con">
                <h2>Teeth Whitening</h2>
                <p>Let,s make your teeth sparkle</p>
                <button>Book</button>
            </div>
            <div class="available-con">
                <h2>Teeth Whitening</h2>
                <p>Let,s make your teeth sparkle</p>
                <button>Book</button>
            </div>
            <div class="available-con">
                <h2>Teeth Whitening</h2>
                <p>Let,s make your teeth sparkle</p>
                <button>Book</button>
            </div>
            <div class="available-con">
                <h2>Teeth Whitening</h2>
                <p>Let,s make your teeth sparkle</p>
                <button>Book</button>
            </div>
            <div class="available-con">
                <h2>Teeth Whitening</h2>
                <p>Let,s make your teeth sparkle</p>
                <button>Book</button>
            </div>

        </div>
    </section>
    <form method="post" action="form-input.php">

        <div class="form-con">
            <img src="icon/error.png" id="icon">
            <input type="hidden" value="<?php
            echo "" . $userdetails['Patient_id'] . "";
            ?>" name="patientid" readonly>
            <input type="text" value="<?php
            echo "" . $userdetails['Username'] . "";
            ?>" name="username" readonly>
            <input type="email" value="<?php echo "" . $userdetails['Email'] . "" ?>" readonly>
            <select id="" name="appointment-type" class="sel">
                <?php
                $con = mysqli_connect("localhost", "root", "", "keepfit");
                if ($con) {

                    $sql = "SELECT * FROM `appointment_type`";
                    $result = $con->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $user = $row;
                            echo "<option>" . $user["app_type"] . "</option>
                    ";
                        }

                    }
                }

                ?>
            </select>
            <select id="" name="doctor-name" class="sel">
                <?php
                $con = mysqli_connect("localhost", "root", "", "keepfit");
                if ($con) {

                    $sql = "SELECT * FROM `appointment_type`";
                    $result = $con->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $user = $row;
                            echo "<option>" . $user["Doctor"] . "</option>
                    ";
                        }

                    }
                }

                ?>
            </select>
            <input type="date" placeholder="Appointment Date" name="appointment-date" id="date" required
                style="width:95%; margin-bottom: 10px;">
            <label for="" style="padding: 10px; color:grey; font-weight:lighter;">Appointment Time:</label>
            <select name="appointment-time"
                style="margin-left:7px;padding: 6px; width: 95%; border-radius:10px; margin-bottom: 10px; border-color: rgb(38, 174, 184);">
                <option name="appointment-time" value="10:00am">10:00am</option>
                <option name="appointment-time">11:00am</option>
                <option name="appointment-time">12:00pm</option>
                <option name="appointment-time">1:00pm</option>
                <option name="appointment-time">2:00pm</option>
                <option name="appointment-time">3:00pm</option>
                <option name="appointment-time">4:00pm</option>
            </select>
            <input type="text" name="appointment-day" value="" id="day" readonly>
            <button>Submit</button>
        </div>
    </form>
    <script>
        const btn = document.querySelectorAll("button").forEach(btn => {
            btn.addEventListener("click", function () {
                document.querySelector("form").style.display = "flex";
            })
        })

        document.getElementById("icon").addEventListener("click", () => {
            document.querySelector("form").style.display = "none";
        });

    // Day query
    const date = document.getElementById("day");
    const dates = document.getElementById("date");
    const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    const d =new Date();
        let day = days[d.getDay()];
        date.value = day

//      const date = document.getElementById("day");

//     var input  = document.getElementById("date").value;
//      var d = new Date(input);

//      if(!!d.valueOf()){
//         day = d.getDate()
// date.value = "day"

//      }
    </script>
</body>

</html>