<?php
 
session_start();

//print_r($_SESSION);

//database connection
$mysqli = require __DIR__ . "/database_conn.php";

//Update record ("TABLE COLUMN NAME = HTML ATTRIBUTE NAME")
$sql = "UPDATE user_personal_info SET 
            Email = '$_POST[email]',
            Department = '$_POST[department]',
            Name = '$_POST[name]',
            House_no = '$_POST[house_no]',
            Barangay = '$_POST[barangay]',
            Municipality = '$_POST[municipality]',
            Region = '$_POST[region]',
            Province = '$_POST[province]',
            Postal_Code = '$_POST[postal_code]',
            Country = '$_POST[country]',
            Contact_num = '$_POST[contact_num]',
            Telephone_num = '$_POST[telephone_num]'
            WHERE Employee_No = '$_POST[employee_no]' ";


$stmt = $mysqli->stmt_init();

if(!$stmt->prepare($sql)) {
    die("SQL error: ". $mysqli->error);
}


if ($stmt->execute()) {
    //redirect user to page after successfull regisration
 
    header("Location: ../views/acc_home.php");
    die("Report Submitted Successfully");
    
    exit;

} else {
    die($mysqli->error . " " . $mysqli->errno);
}


