<?php
include "connect.php";
session_start();

if(isset($_POST["submit"])){
    $patient = $_POST["patient"];
    $doctor = $_POST["doctor"];
    $email = $_POST["email"];
    $time = $_POST["time"];
    $date = $_POST["date"];
    $description = $_POST["description"];

    if($patient && $doctor && $email && $date && $time){
        $getPat = "SELECT * FROM patient WHERE pat_email = '$email'";
        $getDoc = "SELECT * FROM doctor WHERE doc_fname + doc_lname = '$doctor'";
        
        $query_getPat = $conn->query($getPat);
        $pat_result = $query_getPat->fetch_assoc();

        $query_getDoc = $conn->query($getDoc);
        $doc_result = $query_getDoc->fetch_assoc();
        
        $patient_id = $pat_result["pat_id"];
        $doctor_id = $doc_result["doc_id"];
        if(!$doc_result || !$pat_result){
            die("User not found please check the email well".$conn->error);
        }else{
         $insert = "INSERT INTO appointment(doc_id, pat_id, app_date, app_time, app_email, app_description) VALUES ('$doctor_id', '$patient_id', '$date', '$time', '$email', '$description')";

            $query_insert = $conn->query($insert);
                if($query_insert){
                    echo "<h1> Appointment booked successfully </h1>";
                }else{
                    die($conn->error);
            }
        }
    }else{
        echo "Please fill out the form";
    }
}else{
    echo "Please click the submit button";
}

?>