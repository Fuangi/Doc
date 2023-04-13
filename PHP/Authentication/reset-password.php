<?php
include "../connect.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    .pass h1{
        text-align: center;
        font-szie: 30px;
        background: #22a6f2;
        padding: 25px;
    }
    .reset{
        text-align: center;
        display: block;
        width: 50%;
        margin: 50px auto;
        border: 1px solid #000;
        padding: 20px;
    }
    .reset input{
        display: block;
        margin: 10px auto;
        width: 300px;
        height: 30px;
    }
    .reset input:last-child{
        width: 100px;
        border-raduis: 50px;
    }
</style>
<body>
<div class="pass">
    <h1>Reset Password</h1>
</div>
<form action="" class="reset">
    <label for="email">Email</label>
    <input type="email" names="email" id="email" value="">
    <label for="email">New Password</label>
    <input type="password" name="pass" id="pass">
    <label for="email">Confirm Password</label>
    <input type="password" name="password" id="pass">
    <input type="submit" value="Submit">
</form>
</body>
</html>

<?php
if(isset($_POST["submit"])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email && $password){
        $select_user = "SELECT * FROM users WHERE user_email = '$email'";
        $select_user_query = $con->query($select_user);

        if($select_user_query->num_rows == 1){
            // fetching the query result as an associative array
            $result = $select_user_query->fetch_assoc();
            // print_r($result); to print the results 
            // echo $select_user_query;

            if($result["user_pass"] == md5($password)){
                echo "Welcome to CRUD...";
                $_SESSION["id"] = $result["user_id"];
                header('Refresh: 2; url = ../../pages/home.php');
            }
            /*
            the header is used to tell the page what to do after the above conditions have been met. Like maybe it should redirect the user to a different page 
            the refresh is such that the page, after doing what is above, should redirect to a different location in the url
        */
        }
    }
    else{
        echo "You have to input all the enteries!";
    }

}
?>