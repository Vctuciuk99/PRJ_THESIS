<?php
//declaration
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
    $time_to_error = "Please enter time";
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


include('../views/acc_home.php');

































