<?php
    session_start(); 

    if (isset($_SESSION["user_id"])) {

        $mysqli = require __DIR__ . "/database_conn.php";

        $sql = "SELECT * FROM user
                WHERE id = {$_SESSION["user_id"]}";

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
            <p>WELCOME!</p>
            <p><?= htmlspecialchars($user["name"]) ?></p>
            
            <!-- SUBMISSION FORM -->
            <form>
                <h3>Daily Input Work Accomplishment Report</h3>
                            
                <label for="date">DATE:</label>
                <input type="date" name="date" required>
                <label for="time">TIME:</label>
                <input type="time" name="time" required>
                <label for="date">OUT:</label>
                <input type="date" name="date" required>
                <label for="date">DATE:</label>
                <input type="date" name="date" required>
                <label for="date">DATE:</label>
                <input type="date" name="date" required>
            </form>
            

















            <!--Logout user from the session -->
            <p><a href="../php/logout.php">LOGOUT</a></p>
        <?php else: ?>
            <!--redirect to loginpage if no session -->
            <p><a href = "../index.php"></a></p>
            <?php header("Location: ../index.php"); ?>
        <?php endif; ?>
    </body>
</html>