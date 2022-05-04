<?php
    
    //password confirmation
    if ($_POST["password"] !== $_POST["confirm_password"]) {
        die("Password must match"); 
    }

    //hash password
    $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT); 


//database connection
$mysqli = require __DIR__ . "/database_conn.php";

//insert into_personal_info (TABLE NAME)
$sql_personal_info = "INSERT INTO user_personal_info
        (Employee_No, Email, Department, Name, House_No, Barangay, 
        Municipality, Region, Province, Postal_Code, Country, Contact_Num,
        Telephone_Num, Password_Hash)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt_personal_info = $mysqli->stmt_init();

if(!$stmt_personal_info->prepare($sql_personal_info)) {
    die("SQL error: ". $mysqli->error);
}

$stmt_personal_info->bind_param("ssssssssssssss", 
        $_POST["employee_no"],
        $_POST["email"],
        $_POST["department"], 
        $_POST["name"], 
        $_POST["house_no"],
        $_POST["barangay"],
        $_POST["municipality"],
        $_POST["region"],
        $_POST["province"],
        $_POST["postal_code"],
        $_POST["country"],
        $_POST["contact_num"],
        $_POST["telephone_num"],
        $password_hash 
    ); 

//handle duplicate entry error
if ($stmt_personal_info->execute()) {
    //redirect user to page after successfull regisration
    
    header("Location: ../views/successful_signup.html");
    exit;

} else {
    if ( $mysqli->errno === 1062) {
        die("Email or Teacher's ID already registered" );
    } else {
    die($mysqli->error . " " . $mysqli->errno);
    }
}