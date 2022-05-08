
<?php include "../php/check_user.php"?>


<h1>UPDATE!!!!!!!!!!!!!!</h1>
      
        <form action="../php/update_info.php" method="post">
        
        <!-- Personal Information -->
        <h4>Personal Information</h4>
        
        <!-- Employee # -->
            <label for="employee_no">Employee number: </label>
            <input type="text" name="employee_no" value="<?= htmlspecialchars($user["Employee_No"]) ?>" readonly required><br>

        
        <!-- Department -->
            <label for="department">Select your Department: </label><br>
            <select name="department" id="department" disabled >
                <option><?= htmlspecialchars($user["Department"]) ?></option>
                <option value="Civil Engineering">Civil Engineering</option>
                <option value="Computer Engineering">Computer Engineering</option>
                <option value="Electrical Engineering">Electrical Engineering</option>
                <option value="Electronics Engineering">Electronics Engineering</option>
                <option value="Mechanical Engineering">Mechanical Engineering</option>
            </select><br>    
        
        <!-- Name -->
            <label for="name">Name: </label>
            <input type="text" value="<?= htmlspecialchars($user["Name"]) ?>" name="name" id="name" readonly="readonly" required>
            <div id="error"></div>     
        
        <!-- Address -->    
        <!-- House No. -->
            <label for="house_no">Address: </label><br>
            <input type="text" name="house_no" id="house_no" value="<?= htmlspecialchars($user["House_no"]) ?>" readonly="readonly" required><br>
        
        <!-- Barangay -->
            <input type="text" name="barangay" id="barangay" value="<?= htmlspecialchars($user["Barangay"]) ?>" readonly="readonly" required>    
        
        <!-- Municipality -->
            <input type="text" onkeypress="isInputLetter(event)" name="municipality" id="municipality" value="<?= htmlspecialchars($user["Municipality"]) ?>" readonly="readonly" required><br>

        <!-- Region -->
            <input type="text" name="region" id="region" value="<?= htmlspecialchars($user["Region"]) ?>" readonly="readonly">

        <!-- Province -->
            <input type="text" onkeypress="isInputLetter(event)" name="province" id="province" value="<?= htmlspecialchars($user["Province"]) ?>" readonly="readonly" required><br>
     
        <!-- Country -->
            <input type="text" onkeypress="isInputLetter(event)" name="country" id="country" value="<?= htmlspecialchars($user["Country"]) ?>" readonly="readonly" required>
        
        <!-- Postal Code -->
            <input type="text" onkeypress="isInputNumber(event)" name="postal_code" id="postal_code" value="<?= htmlspecialchars($user["Postal_Code"]) ?>" readonly="readonly" required><br><br>
        
        <!-- Contact Information -->
        <h4>Contact Information</h4>

        <!-- Email -->
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" value="<?= htmlspecialchars($user["Email"]) ?>" readonly="readonly" required><br>
        
        <!-- Contact Number -->
            <label for="contact_num">Contact Number: </label>
            <input type="text" onkeypress="isInputNumber(event)" name="contact_num" id="contact_num" value="<?= htmlspecialchars($user["Contact_Num"]) ?>" readonly="readonly" required><br>
        
        <!-- Telephone Number -->
            <label for="telephone_num">Telephone Number: </label>
            <input type="text" onkeypress="isInputNumber(event)" name="telephone_num" id="telephone_num" value="<?= htmlspecialchars($user["Telephone_Num"]) ?>" readonly="readonly" required><br><br>
       
        <!-- Signup Credential -->
        <h4>SIGNUP CREDENTIAL</h4>

        <!-- Email -->
            <label for="email_2">Email: </label> 
            <input type="email" name="email_2" id="email_2" value="<?= htmlspecialchars($user["Email"]) ?>" readonly="readonly" required><br>
        
        <!-- Password -->
            <!-- <label for="password">Password: </label>
            <input type="password" name="password" id="password"  readonly="readonly"><br> -->
        
        <!-- Confirm Password -->
            <!-- <label for="confirm_password">Confirm Password: </label>
            <input type="password" name="confirm_password" id="confirm_password" readonly="readonly"><br> -->
        
        <button type="submit" >Update</button>
    </form>

    <input id="myButton" type="submit" value="Edit" />
    <a href="./acc_home.php">HOME</a>
    <script>

        document.getElementById('myButton').onclick = function() {
        document.getElementById('department').disabled = false;
        document.getElementById('name').readOnly = false;
        document.getElementById('house_no').readOnly = false;
        document.getElementById('barangay').readOnly = false;
        document.getElementById('municipality').readOnly = false;
        document.getElementById('region').readOnly = false;
        document.getElementById('province').readOnly = false;
        document.getElementById('country').readOnly = false;
        document.getElementById('postal_code').readOnly = false;
        document.getElementById('email').readOnly = false;
        document.getElementById('contact_num').readOnly = false;
        document.getElementById('telephone_num').readOnly = false;
        document.getElementById('email_2').readOnly = false;
            
            
        };

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
    </body>
</html>