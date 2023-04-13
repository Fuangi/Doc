<?php
include "../connect.php";


// echo $_POST['submit1']."here";

if(isset($_POST["submit"])){

    $password = $_POST["password"];
    $email = $_POST["mail"];

    if($email && $password){

        $select = "SELECT * FROM patient WHERE pat_email = '$email'";
        $select_query = $conn->query($select);

        // print_r ($select_query);
        if($select_query->num_rows == 1){
            $result = $select_query->fetch_assoc();
            // print_r($result);


            if(md5($password) == $result["pat_pass"]){
                echo "<h1> Welcome to Doc4U </h1>";
            header ('Refresh: 2; url= ../../dashboards/patients.php');
            $_SESSION["id"] = $result["pat_id"];
            // echo $result["pat_id"];
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
