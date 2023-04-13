<?php
session_start();
include "../PHP/connect.php";

// echo $_POST['submit1']."here";

if(isset($_POST["submit"])){

    $password = $_POST["password"];
    $email = $_POST["mail"];

    if($email && $password){
        $select = "SELECT * FROM doctor WHERE doc_email = '$email'";
        $select_query = $conn->query($select);

        // print_r ($select_query);
        if($select_query->num_rows == 1){
            $result = $select_query->fetch_assoc();
            $password = md5($password);
            echo "<br>".$password;
            echo " Okay ".md5($password);
            if($password == $result["doc_pass"]){
                echo "<h1> Welcome to Doc4U </h1>";
            header ('Refresh: 2; url= dashboard.php');
            $_SESSION["id"] = $result["doc_id"];
            }else{
                echo "<h1> Password is incorrect </h1>";
            }
        }else{
            echo "user not found";
        }
    }
    else{
        echo "Please fill in all the fields";
    }
}else{
    echo "Please Click on the Submit button";
}
?>
