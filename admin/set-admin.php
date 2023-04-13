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
    <title>Set Admin</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    .admin{
        text-align: center;
        margin: 50px auto;
        margin-bottom: 20px;
    }
    .enteries{
        border: 1px solid #333;
        padding: 50px;
        text-align: center;
        width: 50%;
        margin: 10px auto;
    }
    .enteries form{
      text-align: center;
      margin: 10px auto;
    }
    .enteries form input:not(last-child){
        display: block;
        margin: 10px;
        width: 50%;
        height: 30px;
        text-align: center;
        outline: none;
    }
</style>
<body>
    <section class="admin">
        <h1>Set Admin</h1>
        <p>Please note that the admin should have an account either as a user(patient) or a doctor before he can be made an admin</p>
    </section>
    <div class="enteries">
        <center>
            <h2>Set Admin</h2>
            <form action="" method="post">
                <input type="text" name="adminName" placeholder="Admin Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="pass" placeholder="Confirm Password" required>
                <input type="submit" value="Submit" name="submit">
            </form>
        </center>
    </div>
</body>
</html>

<?php

if(isset($_POST["submit"])){
    $name = $_POST["adminName"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $pass = $_POST["pass"];

    if($name && $email && $password && $pass){
        if($password == $pass){
            $insert = "INSERT INTO admin (admin_name, admin_email, admin_password) VALUES ('$name', '$email', '$password')";
            $query_insert = $conn->query($insert);

            if($query_insert){
                echo "<h2> Admin set up successfully.</h2>";
                header ('Refresh: 2; url= dashboard.php');
            }else{
                die($conn->error);
            }
        }else{
            echo "Both paswords should match and be atleast 8 characters";
        }
    }else{
        echo "Please fill in all the fields";
    }
}


?>