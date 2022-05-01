<?php
    //prevent null
    if (empty($_POST["email"])) {
        die("Email is required");
    }

    //validate email
    if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL )) {
        die("Please enter a valid email");
    }

    //password length validation
    if (strlen($_POST["password"]) < 8) {
        die("Password must be atleaset 8 characters");
    }

    // if (! preg_match("/[a-z]i", $_POST["password"])){
    //     die("Password must contain at least one letter");
    // }

    // if (! preg_match("/[A-9]i", $_POST["password"])){
    //     die("Password must contain at least one number");
    // }

    // if (! preg_match("/[A-Z]i", $_POST["password"])){
    //     die("Password must contain at least one capital letter");
    // }

    //password confirmation
    if ($_POST["password"] !== $_POST["confirm_password"]) {
        die("Password must match"); 
    }

    //hash password
    $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT); 


//database connection
$mysqli = require __DIR__ . "/database_conn.php";

//insert new record
$sql = "INSERT INTO user  (teacher_id, email, name, position, password_hash)
            VALUES (?, ?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if(!$stmt->prepare($sql)) {
    die("SQL error: ". $mysqli->error);
}

$stmt->bind_param("sssss", 
        $_POST["teacher_id"], 
        $_POST["email"], 
        $_POST["name"], 
        $_POST["position"],
        $password_hash, 
    ); 

//handle duplicate entry error
if ($stmt->execute()) {
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

