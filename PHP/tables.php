<?php
include "connect.php";

//the include here, imports the file and treats it as part of this file
// Creating a database if it doesn't exist
// the -> is used for accessing object methods and properties like (.) in JS. here (.) is used for concatenation

$create_db = "create database if not exists doctor_appointment";
$query = $conn->query($create_db);

if(!$query){
    die("Database not created");
}
else{
    echo "<h1> Database created </h1>";
}
$create_tables = array(
    "CREATE TABLE IF NOT EXISTS `doctor_appointment`.`Schedule` (
        `Schedule_Id` VARCHAR(20) NOT NULL,
        `Days` VARCHAR(45) NULL,
        `DocStartTime` DATETIME NULL,
        `Description` VARCHAR(45) NULL,
        `Doc_Name` VARCHAR(45) NULL,
        `DocBreakTime` DATETIME NULL,
        `DocEndTime` VARCHAR(45) NULL,
        PRIMARY KEY (`Schedule_Id`),
        UNIQUE INDEX `Schedule_Id_UNIQUE` (`Schedule_Id` ASC) )
      ENGINE = InnoDB;",
      "CREATE TABLE IF NOT EXISTS `doctor_appointment`.`Admin` (
        `Admin_ID` INT NOT NULL,
        `Admin_Name` VARCHAR(45) NULL,
        `Admin_Loc` VARCHAR(45) NULL,
        `Admin_Description` VARCHAR(45) NULL,
        PRIMARY KEY (`Admin_ID`),
        UNIQUE INDEX `Admin_ID_UNIQUE` (`Admin_ID` ASC))
      ENGINE = InnoDB;",
      "CREATE TABLE IF NOT EXISTS `doctor_appointment`.`Doctor` (
        `Doc_Id` VARCHAR(20) NOT NULL,
        `Doc_Name` VARCHAR(45) NOT NULL,
        `Doc_Contact` VARCHAR(45) NOT NULL,
for($i = 0; $i < count($create_tables); $i++){
    $query = ($create_tables[$i]);
    if(!$conn->query($query)){
        echo "<h3>table creation failed </h3> ".$conn->error;
    }
    else{
        echo "<h3> Table created successfully </h3>";
    }
}
$conn->close()
?>