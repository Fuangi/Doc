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
    <title>Doctor SignUP</title>
    <link rel="stylesheet" href="../Styles/signup.css">
  </head>
<body>
	<section class="heading">
			<nav class="navLinks"> 
				<a href=""><img class="logo" src="" alt="Logo"></a>
				    <div class="nav-links">
					  <ul class="MenuItem">
						 <li> <a href="index.html">Home</a> </li>
						 <li> <a href="centers.html">Centers</a> </li> 
						 <li> <a href="#">Login</a> </li>
						 <!-- <li> <a href="about.html">About</a> </li> -->
						 <li> <a href="appoint.html">Appointments</a> </li>
					 </ul>
					 </div>
			</nav>
	<center>
 <div class="container right-panel-active">
    	<!-- Sign In -->
	<div class="container__form container--signin">
		<form name="myform" action="login.php" class="form" id="form2" method="post">
			<h2 class="form__title">Login</h2>
			<input type="email" placeholder="Email" class="input" name="mail"/>
			<div id="emailnote"></div>
			<input type="password" placeholder="Password" class="input" name="password" />
			<div id="passnote"></div>
			<a href="#" class="link">Forgot your password?</a>
			<a href="../login.html" class="link">Are you a Patient?</a>
			<input type="submit" class="btn" id="btn1" value="Login" name="submit">
		</form>
	</div>
	
	<!-- Sign Up -->
	<div class="container__form container--signup">
		<form name="f1" action="" class="form" id="form1" method="post">
			<h2 class="form__title">Sign Up</h2>
			<input type="text" placeholder="First name" class="input" name="fname" required/>
			<input type="text" placeholder="Last name" class="input" name="lname"/>
			<input type="text" placeholder="Location" class="input" name="location"/>
			<input type="email" placeholder="Email" class="input" name="email" required/>
            <input type="tel" placeholder="Phone" class="input" name="phone" required/>
            <input type="text" placeholder="Specialty" class="input" name="specialty" required/>
			<input type="password" placeholder="Password" class="input" name="pass1" required/>
			<div id="letpass"></div>
            <input type="password" placeholder="Confirm Password" class="input" name="pass2"/>
			<div id="samepass"></div>
			<input type="submit" class="btn" id="btn2" value="Register" name="submit">
		</form>
	</div>
	
	<!-- Overlay -->
	<div class="container__overlay">
		<div class="overlay">
			<div class="overlay__panel overlay--left">
				<h1>Hello there!</h1>
				<p>Enter your personal info to <br> join and begin your journey with us</p>
				<button class="btn" id="signUp">Sign Up</button>
			</div>
			<div class="overlay__panel overlay--right">
				<h1>Welcome back!</h1>
				<p>To stay connected with us, <br> please login with your personal info</p>
				<button class="btn" id="signIn">Login</button>
			</div>
		</div>
	</div>
</div>
</center>
</section>
<script src="../Scripts/login.js"></script>
</body>
</html>

<?php

if(isset($_POST["submit"])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $tel = $_POST["phone"];
    $password = $_POST["pass1"];
    $pass = $_POST["pass2"];
	$location = $_POST["location"];
    $specialty = $_POST["specialty"];

    if($fname && $lname && $email && $tel && $password && $pass){
        if($password == $pass && strlen($password) >= 8){
			$password= md5($password);
            $insert = "INSERT INTO doctor (doc_fname, doc_lname, doc_tel, doc_location, doc_specialty, doc_email, doc_pass) VALUES ('$fname', '$lname', '$tel', '$location', '$specialty', '$email', '$password')";

            $query_insert = $conn->query($insert);

            if(!$query_insert){
				die($conn->error);
			}else{
                "<h1> Account Created successfully. </h1>";
				header ('Refresh: 2; url= dashboard.php');
            }
        }
        else{
			die($conn->error);
            echo "<h2> Your two passwords must be equal and greater than 8 characters </h2>";
        }
    }
    else{
        die($conn->error);
    }
}
?>