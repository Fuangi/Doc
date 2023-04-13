<?php
include "../PHP/connect.php";
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
    <link rel="stylesheet" href="../dashboards/style.css">
</head>
<style>

</style>
<body>
    <h1>Welcome to the Doctor Dashboard</h1>
    <section class="container">
    <section class="details">
        <button id="drop">Doctor Details</button>
        <div class="content">
        <ul>
            <li>Name: </li>
            <li>Email: </li>
            <li>Location: </li>
            <li><a href="">Edit Info</a></li>
        </ul>
        </div>
        <div class="menu">
          <ul>
            <li> <a href="../index.html"> Home</a></li>
            <li><a href="../forums.html" target="frame"> Forums </a></li>
            <li><a href="../doctors.html" target="frame"> Schedule</a></li>
            <li><a href="../appoints.html" target="frame"> Appointments </a></li>
          </ul>
        </div>
    </section>
    <section class="display-area">
        <div class="menu" id="menu"> 
            <iframe src="../dashboards/welcome.html" frameborder="0" name="frame"> </iframe>
        </div>
    </section>
    </section>
</body>
</html>
<script src="../dashboard.php"></script>