<?php
    session_start(); 

    //check if session_id is available
    if (isset($_SESSION["session_id"])) {

        $mysqli = require "../php/database_conn.php";

        $sql = "SELECT * FROM user
                WHERE teacher_id = {$_SESSION["session_id"]}" ;

        $result = $mysqli->query($sql);
        $user = $result->fetch_assoc();
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
        
    <?php if (isset($user)): ?>
            <h1>HOME!!!!</h1>
            
            
            <!-- SUBMISSION FORM -->
            <form action="../php/submission_form.php" method="post">
                <h3>Daily Individual Work Accomplishment Report</h3>
                
                <p>WELCOME!</p>
                <input name="teacher_id" value=<?= htmlspecialchars($user["teacher_id"]) ?> readonly> <br>
                <input name="name" value=<?= htmlspecialchars($user["name"]) ?> readonly> <br>
                <input name="email" value=<?= htmlspecialchars($user["email"]) ?> readonly> <br>
 
                <label for="date">DATE: </label>
                <input type="date" name="date" required><br>
                <label for="time_from">TIME FROM: </label>
                <input type="time" name="time_from" required><br>
                <label for="time_to">TIME TO:</label>
                <input type="time" name="time_to" required><br>
                <label for="output">OUTPUT FOR THE DAY: </label>
                <input type="text" name="output" required><br>
                <label for="details">DETAILS OF THE OUTPUT: </label>
                <input type="text" name="details" required><br>
                <label for="verify">VERIFICATION: </label>
                <input type="text" name="verify" required><br><br>
                <button name="Submit">Submit Form</button><br><br>
            </form>
            <!--check records-->
            <a href="./records.php">Records</a><br>
            <br>

            <a href="./changePass.php">Change Password</a><br><br>

            <!--Logout user from the session -->
            <a href="../php/logout.php">LOGOUT</a>
        <?php else: ?>
            <!--redirect to loginpage if no session -->
            <?php header("Location: ../index.php"); ?>
        <?php endif; ?>
    </body>
</html>