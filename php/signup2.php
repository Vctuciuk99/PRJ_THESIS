<?php
    
    //declaration
    $employee = filter_input(INPUT_POST,'employee_no');
    $department = filter_input(INPUT_POST,'department');
    $name = filter_input(INPUT_POST, 'name');
    $house_no = filter_input(INPUT_POST, 'house_no');
    $barangay = filter_input(INPUT_POST, 'barangay');
    $municipality = filter_input(INPUT_POST, 'municipality');
    $region = filter_input(INPUT_POST, 'region');
    $province = filter_input(INPUT_POST, 'province');
    $country = filter_input(INPUT_POST, 'country');
    $postal_code = filter_input(INPUT_POST, 'postal_code');
    $email = filter_input(INPUT_POST, 'email');
    $contact_num = filter_input(INPUT_POST, 'contact_num');
    $telephone_num = filter_input(INPUT_POST, 'telephone_num');
    $email_2 = filter_input(INPUT_POST, 'email_2');
    $password = filter_input(INPUT_POST, 'password');
    $con_password = filter_input(INPUT_POST, 'confirm_password');

    //empty email
    if(empty($employee)) {
        $employee_error = "Please enter a valid employee id.";
    }elseif( strlen($employee) > 6 ) {
        $employee_error = "Please enter a valid employee id.";
    }

    //empty department
    if($department === 'Select Department') {
        $department_error = "Please choose your department";
    }

    //empty name
    if(empty($name)) {
        $name_error = "Please enter your name";
    }

    //empty house_no & barangay
    if(empty($house_no) || empty($barangay)) {
        $barangay_error = "Please enter valid address";
    }

    //empty municipality & region
    if(empty($municipality) || empty($region)) {
        $region_error = "Please enter valid address";
    }

    //empty province & country
    if(empty($province) || empty($country)) {
        $country_error = "Please enter valid address";
    }

    //empty postal code
    if(empty($postal_code)) {
        $postal_code_error = "Please enter valid address";
    }

    //empty email
    if(empty($email)) {
        $email_error = "Please enter your email";
    }elseif(! filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_error = "Please enter a valid email address";
    }

    //empty contact number
    if(empty($contact_num)) {
        $contact_num_error = "Please enter your contact number";
    }elseif( strlen($contact_num) < 9 || strlen($contact_num) > 11){
        $contact_num_error = "Please enter your a valid contact number";
    }

    //empty telephone number
    if(empty($telephone_num)) {
        $telephone_num_error = "Please enter your telephone number";
    }elseif( strlen($telephone_num) < 6 || strlen($telephone_num) > 6){
        $telephone_num_error = "Please enter your a valid contact number";
    }

    // /empty email 2
    if(empty($email_2)) {
        $email_2_error = "Please enter your email";
    }elseif(! filter_var($email_2, FILTER_VALIDATE_EMAIL)){
        $email_2_error = "Please enter a valid email address";
    }

    //empty password
    if(empty($password) || empty($con_password)) {
        $password_error = "Please enter a password";
    }elseif (strlen($password) < 8 ) {
        $password_error = "password must be atlseast 8 characters";
    }
    
    //password matching
    if ($password !== $con_password) {
        $password_error = "Password did not match" ;
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
            $error = "Email or Teacher's ID already registered";
        } else {
        die($mysqli->error . " " . $mysqli->errno);
        }
    }

    include('../views/signup.php')
?>
