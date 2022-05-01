<?php
    session_start();
    
    $mysqli = require "../php/database_conn.php";

    $tableName="record";
    $columns= ['id', 'teacher_id', 
                'email', 'name', 'date', 'time_from', 
                'time_to', 'output', 'details', 'verification'];
    
    $fetchData = fetch_data($mysqli, $tableName, $columns);
    function fetch_data($mysqli, $tableName, $columns){
     if(empty($mysqli)){
      $msg= "Database connection error";
     }elseif (empty($columns) || !is_array($columns)) {
      $msg="columns Name must be defined in an indexed array";
     }elseif(empty($tableName)){
       $msg= "Table Name is empty";
    }else{
    
    $columnName = implode(", ", $columns);
    
    $query = "SELECT * FROM record WHERE 
                            teacher_id = {$_SESSION["session_id"]}";

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