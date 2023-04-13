<?php
include "PHP/connect.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments</title>
    <link rel="stylesheet" href="Styles/appoint.css">
</head>
<body>

    <section class="header">
        <nav class="navLinks">
            <div class="nav-links">
             <ul class="MenuItem">
               <li> <a href="index.html">Home</a> </li>
               <li> <a href="centers.html">Centers</a> </li> 
                <li> <a href="login.html">Login</a> </li> 
               <li> <a href="#">Appointments</a></li>
             </ul>
           </div>
         </nav> 

 <!--------APPOINTMENT -->
 
        <form action="PHP/appoint.php" method="post">
            <h2>Appointment</h2>
            <input type="text" name="patient" id="patient" placeholder="Patient Name">
            <input type="email" name="email" id="pat-email" placeholder="Email">
            <select name="doctor" id=""></select>
            <?php 
            while($doctor = )
            ?>
            <!-- <input type="text" name="doctor" placeholder="Doctor Name"> -->
            <input type="date" name="date" id="date">
            <input type="time" name="time">
            <textarea name="description" id="desc" cols="35" rows="3" placeholder="Description"></textarea>
            <input type="submit" class="btn" value="Book" name="submit"> 
        </form>
    
        <section class="manage-appointment">
             <!--To cancel or postpone an already booked appointment-->
            <h3>Already have an appointment?</h3>
             <button>View</button>
            <button>Edit</button>
            <button>Cancel</button>
        </section>
    
    </section>
</body>
</html>