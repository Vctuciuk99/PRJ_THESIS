<?php
    session_start();
    
    //print_r($_SESSION);
    //print_r($_SESSION);
    //check if session_id is available
    if (isset($_SESSION["session_id"])) {

        $mysqli = require "../php/database_conn.php";

        $sql = "SELECT * FROM  user_personal_info
                WHERE Employee_No = {$_SESSION["session_id"]}" ;

        $result = $mysqli->query($sql);
        $user = $result->fetch_assoc();
    }
?>
