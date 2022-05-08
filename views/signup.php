<?php 
    //VON MAY PHP SA LOOB NG MGA INPUT PRA MA MAINTAIN UNG VALUE 
    //KADA PISA NG SUBMIT PAG DI PA FULLY VALIDATED


    //set input box to default after loading the page
    if (!isset($employee)) {
        $employee = '';
    }
    if (!isset($department)) {
        $department = 'Select Department';
    }
    if (!isset($name)) {
        $name = '';
    }
    if (!isset($house_no)) {
        $house_no = '';
    }
    if (!isset($barangay)) {
        $barangay = '';
    }
    if (!isset($municipality)) {
        $municipality = '';
    }
    if (!isset($region)) {
        $region = '';
    }
    if (!isset($province)) {
        $province = '';
    }
    if (!isset($country)) {
        $country = '';
    }
    if (!isset($postal_code)) {
        $postal_code = '';
    }
    if (!isset($email)) {
        $email = '';
    }
    if (!isset($contact_num)) {
        $contact_num = '';
    }
    if (!isset($telephone_num)) {
        $telephone_num = '';
    }
    if (!isset($email_2)) {
        $email_2 = '';
    }
    if (!isset($password)) {
        $password = '';
    }
    if (!isset($con_password)) {
        $con_password = '';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <h1>SIGNUP!!!!</h1>
        <form action="../php/signup2.php" method="post" id="myForm">
            
                <!-- Personal Information -->
                <h4>Personal Information</h4>

                <!-- duplicate email or employeeid entry -->
                <?php if (isset($error)) { ?>
                    <p><?php echo $error ?></p>
                <?php } ?>

                <!-- Employee # -->
                <label for="employee_no">Employee number: </label><br>
                <input type="text" onkeypress="isInputNumber(event)" name="employee_no" id="employee_no" 
                    placeholder="Employer number" value="<?php echo htmlspecialchars($employee)?>" ><br>
                <!-- error msg -->
                <?php if (isset($employee_error)) { ?>
                    <p><?php echo $employee_error ?></p>
                <?php } ?>

                <!-- Department -->
                    <label for="department">Select your Department: </label><br>
                    <select name="department" id="department">
                        <option><?php echo htmlspecialchars($department)?></option>
                        <option value="Civil Engineering">Civil Engineering</option>
                        <option value="Computer Engineering">Computer Engineering</option>
                        <option value="Electrical Engineering">Electrical Engineering</option>
                        <option value="Electronics Engineering">Electronics Engineering</option>
                        <option value="Mechanical Engineering">Mechanical Engineering</option>
                    </select><br>

                <!-- error msg -->
                    <?php if (isset($department_error)) { ?>
                        <p><?php echo $department_error ?></p>
                    <?php } ?>

                <!-- Name -->
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" placeholder="Name" 
                    value="<?php echo htmlspecialchars($name)?>"><br>
                    <!-- error msg -->
                    <?php if (isset($name_error)) { ?>
                        <p><?php echo $name_error ?></p>
                    <?php } ?>
                
                <!-- Address -->
                <!-- House No. -->
                    <label for="house_no">Address: </label><br>
                    <input type="text" name="house_no" id="house_no" placeholder="House number" 
                    value="<?php echo htmlspecialchars($house_no)?>">
                    
                <!-- Barangay -->
                    <input type="text" name="barangay" id="barangay" placeholder="Barangay" 
                    value="<?php echo htmlspecialchars($barangay)?>"><br>
                    <!-- error msg -->
                    <?php if (isset($barangay_error)) { ?>
                        <p><?php echo $barangay_error ?></p>
                    <?php } ?>

                <!-- Municipality -->
                    <input type="text" onkeypress="isInputLetter(event)" name="municipality" id="municipality" placeholder="Municipality" 
                    value="<?php echo htmlspecialchars($municipality)?>">

                <!-- Region -->
                    <input type="text" name="region" id="region" placeholder="Region" 
                    value="<?php echo htmlspecialchars($region)?>"><br>
                    <!-- error msg -->
                    <?php if (isset($region_error)) { ?>
                        <p><?php echo $region_error ?></p>
                    <?php } ?>

                <!-- Province -->
                    <input type="text" onkeypress="isInputLetter(event)" name="province" id="province" placeholder="Province" 
                    value="<?php echo htmlspecialchars($province)?>">

                <!-- Country -->
                    <input type="text" onkeypress="isInputLetter(event)" name="country" id="country" placeholder="Country"
                    value="<?php echo htmlspecialchars($country)?>"><br>
                    <!-- error msg -->
                    <?php if (isset($country_error)) { ?>
                        <p><?php echo $country_error ?></p>
                    <?php } ?>

                <!-- Postal Code -->
                    <input type="text" onkeypress="isInputNumber(event)" name="postal_code" id="postal_code" placeholder="Postal Code" 
                    value="<?php echo htmlspecialchars($postal_code)?>">
                    <!-- error msg -->
                    <?php if (isset($postal_code_error)) { ?>
                        <p><?php echo $postal_code_error ?></p>
                    <?php } ?>

                <!-- Contact Information -->
                <h4>Contact Information</h4>

                <!-- Email -->
                    <label for="email">Email: </label>
                    <input type="text" name="email" id="email" placeholder="Email" 
                    value="<?php echo htmlspecialchars($email)?>"><br>
                    <!-- error msg -->
                    <?php if (isset($email_error)) { ?>
                        <p><?php echo $email_error ?></p>
                    <?php } ?>

                <!-- Contact Number -->
                    <label for="contact_num">Contact Number: </label>
                    <input type="text" onkeypress="isInputNumber(event)" name="contact_num" id="contact_num" placeholder="Contact Number" 
                    value="<?php echo htmlspecialchars($contact_num)?>"><br>
                    <!-- error msg -->
                    <?php if (isset($contact_num_error)) { ?>
                        <p><?php echo $contact_num_error ?></p>
                    <?php } ?>

                <!-- Telephone Number -->
                    <label for="telephone_num">Telephone Number: </label>
                    <input type="text" onkeypress="isInputNumber(event)" name="telephone_num" id="telephone_num" placeholder="Telephone Number" 
                    value="<?php echo htmlspecialchars($telephone_num)?>"><br>
                    <!-- error msg -->
                    <?php if (isset($telephone_num_error)) { ?>
                        <p><?php echo $telephone_num_error ?></p>
                    <?php } ?>

                <!-- Signup Credential -->
                <h4>SIGNUP CREDENTIAL</h4>

                <!-- Email -->
                    <label for="email_2">Email: </label> 
                    <input type="text" name="email_2" id="email_2" placeholder="Email" 
                    value="<?php echo htmlspecialchars($email_2)?>"><br>
                    <!-- error msg -->
                    <?php if (isset($email_2_error)) { ?>
                        <p><?php echo $email_2_error ?></p>
                    <?php } ?>

                <!-- Password -->
                    <label for="password">Password: </label>
                    <input type="password" name="password" id="password" placeholder="Password" 
                    value="<?php echo htmlspecialchars($password)?>"><br>
                    <!-- error msg -->

                <!-- Confirm Password -->
                    <label for="confirm_password">Confirm Password: </label>
                    <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" 
                    value="<?php echo htmlspecialchars($con_password)?>"><br>
                    
                    <!-- error msg -->
                    <?php if (isset($password_error)) { ?>
                        <p><?php echo $password_error ?></p>
                    <?php } ?>
                <button type="submit">SIGNUP</button>
                
            
        </form>
        
    <script>
        function isInputNumber(evt) {
        var ch = String.fromCharCode(evt.which);

        if(!(/[0-9]/.test(ch))){
            evt.preventDefault();
        }
    }
        function isInputLetter(evt) {
            var ch = String.fromCharCode(evt.which);

            if(!(/^[a-zA-Z]+$/.test(ch))){
                evt.preventDefault();
            }
        }
    </script>
    </div>
    
    <a href="../index.php">LOGIN</a>
</body>
</html>