<?php
    session_start(); 
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
        
        <?php if (isset($_SESSION["user_id"])): ?>
            <h1>HOME!!!!</h1>
            <p>WELCOME!!!</p>
            <p>YOU ARE LOGGED IN</p>
            <!--Logout user from the session -->
            <p><a href="../php/logout.php">LOGOUT</a></p>
        <?php else: ?>
            <!--redirect to loginpage if no session -->
            <p><a href = "../index.php"></a></p>
            <?php header("Location: ../index.php"); ?>
        <?php endif; ?>
    </body>
</html>