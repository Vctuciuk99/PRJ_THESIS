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

    //SIGNUP VALIDATION MULA DITO
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
    //HANGGANG DITO

    if (empty($employee_error) && empty($department_error) && empty($name_error) && empty($barangay_error) 
        && empty($region_error) && empty($country_error) && empty($postal_code_error) && empty($email_error)
        && empty($contact_num_error) && empty($telephone_num_error) && empty($email_2_error)
        && empty($password_error))
        {
            include('./signup.php');
        }else{
            include('../views/signup.php');
        }

    
?>
