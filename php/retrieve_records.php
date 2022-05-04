<?php
    session_start();
    
    $mysqli = require "../php/database_conn.php";

    $tableName="user_diwar_record";
    $columns= ['Employee_no', 
                'Email', 
                'Name', 
                'Date', 
                'Time_from', 
                'Time_to', 
                'Output', 
                'Details', 
                'Verification'];
    
    $fetchData = fetch_data($mysqli, $tableName, $columns);
    function fetch_data($mysqli, $tableName, $columns){
     if(empty($mysqli)){
      $msg= "Database connection error";
     }elseif (empty($columns) || !is_array($columns)) {
      $msg="columns Name must be defined in an indexed array";
     }elseif(empty($tableName)){
       $msg= "Table Name is empty";
    }else{
    
    //$columnName = implode(", ", $columns);
    
    $query = "SELECT * FROM user_diwar_record WHERE 
                            Employee_no = {$_SESSION["session_id"]}";

    $result = $mysqli->query($query);

    if($result== true){ 
        if ($result->num_rows > 0) {
            $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
            $msg= $row;
        } else {
            $msg= "No Data Found"; 
        }
    }else{
    $msg= mysqli_error($mysqli);
    }
    }
    return $msg;
    }
?>