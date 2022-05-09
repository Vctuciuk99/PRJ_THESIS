<?php

//database connection
$mysqli = require __DIR__ . "/database_conn.php";

//insert new record
$sql = "INSERT INTO user_diwar_record 
    (Employee_no, Email, Name, Date, Time_from, Time_to, Output, Details, Verification)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if(!$stmt->prepare($sql)) {
    die("SQL error: ". $mysqli->error);
}

$stmt->bind_param("sssssssss",  
        $_POST["Employee_no"],
        $_POST["Email"], 
        $_POST["Name"], 
        $_POST["Date"], 
        $_POST["Time_from"],
        $_POST["Time_to"], 
        $_POST["Output"], 
        $_POST["Details"], 
        $_POST["Verify"]
    );


if ($stmt->execute()) {
    //redirect user to page after successfull regisration
    //header("Location: ../php/acc_home.php");
    $message = "Report Submitted Successfully";
    include('../views/acc_home.php');
    exit;

} else {
    die($mysqli->error . " " . $mysqli->errno);
}

































