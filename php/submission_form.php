<?php

//declaration
// $employee = filter_input(INPUT_POST,'Employee_no');
// $name = filter_input(INPUT_POST, 'Name');
// $email = filter_input(INPUT_POST, 'Email');
$date = filter_input(INPUT_POST,'Date');
$time_from = filter_input(INPUT_POST, 'Time_from');
$time_to = filter_input(INPUT_POST, 'Time_to');
$output = filter_input(INPUT_POST, 'Output');
$details = filter_input(INPUT_POST, 'Details');
$verify = filter_input(INPUT_POST, 'Verify');

//submission validation mula dito
if(empty($date)) {
    $date_error = "Please enter date";
}

if(empty($time_from)) {
    $time_from_error = "Please enter time";
}

if(empty($time_to)) {
    $time_to = "Please enter time";
}

if(empty($output)) {
    $output_error = "Please enter output for the day";
}

if(empty($details)) {
    $details_error = "Please enter the details";
}

if(empty($verify)) {
    $verify_error = "Please enter the verification";
}
//hanggang dito
































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
    die("Report Submitted Successfully");
    
    exit;

} else {
    die($mysqli->error . " " . $mysqli->errno);
}


