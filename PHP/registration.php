<?php
include "connect.php";
session_start();

// echo $_POST["submit"];

if(isset($_POST["submit"])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $tel = $_POST["phone"];
    $password = $_POST["pass1"];
    $pass = $_POST["pass2"];
    $location = $_POST["location"];

    // echo "Something";

    if($fname && $lname && $email && $tel && $password && $pass){
        if($password == $pass && strlen($password) >= 8){
            $password = md5($password);
            $insert = "INSERT INTO patient (pat_fname, pat_lname, pat_email, pat_tel, pat_location, pat_pass) VALUES ('$fname', '$lname', '$email', '$tel', '$location', '$password')";
          
            $query_insert = $conn->query($insert);

            if(!$query_insert){
                echo "<h1> Account not created!</h1>".$conn->error;  
            }else{
                echo "Account Created successfully.";
                header ('Refresh: 1.5; url= ../dashboards/patients.php');
                $_SESSION["id"] = $result["pat_id"];
            }
        }
        else{
            echo "<h2> Your two passwords must be equal and greater than 8 characters </h2>";
        }
    }
    else{
        die($conn->error);
    }
}
?>