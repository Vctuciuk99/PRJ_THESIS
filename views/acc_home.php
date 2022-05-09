<?php include "../php/check_user.php"?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body> 
        
    <?php if (isset($user)): ?>
            <h1>HOME!!!!</h1>
            
            
            <!-- SUBMISSION FORM -->
            <form action="../php/submission_form.php" method="post" enctype="multipart/form-data">
                <h3>Daily Individual Work Accomplishment Report</h3>
                
                <p>WELCOME!</p>
                <input name="Employee_no" value=<?= htmlspecialchars($user["Employee_No"]) ?> readonly> <br>
                <input name="Name" value="<?= htmlspecialchars($user["Name"]) ?>" > <br>
                <input name="Email" value="<?= htmlspecialchars($user["Email"]) ?>" readonly> <br>
                
                <!-- Date -->
                <label for="Date">DATE: </label>
                <input type="date" name="Date" required><br>
                <!-- error msg -->
                <?php if (isset($date_error)) { ?>
                    <p><?php echo $date_error ?></p>
                <?php } ?>
                
                <!-- Time From -->
                <label for="Time_from">TIME FROM: </label>
                <input type="time" name="Time_from" required><br>
                <?php if (isset($time_from_error)) { ?>
                    <p><?php echo $time_from_error ?></p>
                <?php } ?>

                <!-- Time to -->
                <label for="Time_to">TIME TO:</label>
                <input type="time" name="Time_to" required><br>
                <!-- error msg -->
                <?php if (isset($time_to_error)) { ?>
                    <p><?php echo $time_to_error ?></p>
                <?php } ?>

                <!-- output -->
                <label for="Output">OUTPUT FOR THE DAY: </label>
                <input type="text" name="Output" required><br>
                <!-- error msg -->
                <?php if (isset($output_error)) { ?>
                    <p><?php echo $output_error ?></p>
                <?php } ?>

                <!-- details -->
                <label for="Details">DETAILS OF THE OUTPUT: </label>
                <input type="text" name="Details" required><br>
                <!-- error msg -->
                <?php if (isset($details_error)) { ?>
                    <p><?php echo $details_error ?></p>
                <?php } ?>
                
                <!-- verification -->
                <label for="Verify">VERIFICATION: </label>
                <input type="text" name="Verify" required><br><br>
                <!-- error msg -->
                <?php if (isset($verify_error)) { ?>
                    <p><?php echo $verify_error ?></p>
                <?php } ?>
                <button type="submit" name="submit">Submit Form</button><br><br>
                
            </form>
            <!--check records-->

            <a href="./update_info.php">Update Profile</a><br>
            <br>

            <a href="./records.php">All Record Log</a><br><br>

            <!--Logout user from the session -->
            <a href="../php/logout.php">LOGOUT</a><br>


        <?php else: ?>
            <!--redirect to loginpage if no session -->
            
            <?php header("Location: ../index.php"); ?>
        <?php endif; ?>
    </body>
</html>