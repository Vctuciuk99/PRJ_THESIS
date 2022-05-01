<?php

//database connection
$mysqli = require __DIR__ . "/database_conn.php";

//insert new record
$sql = "INSERT INTO record (teacher_id, email, name, date, time_from, time_to, output, details, verification)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if(!$stmt->prepare($sql)) {
    die("SQL error: ". $mysqli->error);
}

$stmt->bind_param("sssssssss",  
        $_POST["teacher_id"],
        $_POST["email"], 
        $_POST["name"], 
        $_POST["date"], 
        $_POST["time_from"],
        $_POST["time_to"], 
        $_POST["output"], 
        $_POST["details"], 
        $_POST["verify"]
    );


if ($stmt->execute()) {
    //redirect user to page after successfull regisration
    //header("Location: ../php/acc_home.php");
    die("Report Submitted Successfully");
    
    exit;

} else {
    die($mysqli->error . " " . $mysqli->errno);
}


