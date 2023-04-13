<?php
session_start();
include "../PHP/connect.php";

$select_user = "SELECT * FROM patient";
$select_user_query = $conn->query($select_user);

if($select_user_query){
    
    $user = $select_user_query->fetch_assoc();
    // print_r($user);
}else{
    die ($conn->error);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .content{
        display: none;
    }
</style>
<body>
    <h1>Welcome to the Patient Dashboard</h1>
    <section class="container">
    <section class="details">
        <button id="drop">Patient Details</button>
        <div class="content" id="content">
        <ul>
            <li class="drop_content">Name: <?php echo $user["pat_fname"] . " ". $user["pat_lname"];?></li>
            <li class="drop_content">Email: <?php echo $user["pat_email"];?></li>
            <li class="drop_content">Location: <?php echo $user["pat_location"]; ?></li>
            <li class="drop_content"><a href="">Edit Info</a></li>
        </ul>
        </div>
        <div class="menu">
          <ul>
            <li> <a href="../index.html"> Home</a></li>
            <!-- <li><a href="../forums.html" target="frame"> Forums </a></li> -->
            <li><a href="../centers.html" target="frame"> Doctors</a></li>
            <li><a href="../appoint.html" target="frame"> Appointments </a></li>
          </ul>
        </div>
    </section>
    <section class="display-area">
        <div class="menu" id="menu"> 
            <iframe src="welcome.html" frameborder="0" name="frame"></iframe>
        </div>
    </section>
    </section>
</body>
</html>
<script>
    let dropDown = document.getElementById("drop");
    let dropContent = document.getElementById("content");
    dropDown.addEventListener("click", ()=>{
        if(dropContent.style.display == "none"){
            dropContent.classList.add("off-screen");
            dropContent.style.display = "block";
        }else{
            dropContent.classList.toggle("content");
        }
    }, false);

</script>