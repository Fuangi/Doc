<?php
//connection variables
$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "doctor_appointment";

// Create connection
$conn = new mysqli($server_name, $user_name, $password, $db_name);

// Check connection

/* if (!$conn) {
 echo "<h1> Connection failed </h1>" ;
}
else{
echo " <h1> Connected successfully </h1>";
} */

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "<h1>Connected successfully</h1>";


?>