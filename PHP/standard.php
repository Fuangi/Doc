<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $db_name = "doctor_appointment";

    $connect = mysqli_connect($host, $user, $password, $db_name);

    if(!$connect){
        echo "<h1 style=". "color: 'red';". ">Connection Failed </h1>";
    }else{
        echo "<h1 style=" . "color: 'green';". "> Connection successful </h1>";
    }
    
    ?>