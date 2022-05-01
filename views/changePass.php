<?php 
    
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
    <form method="post">
        <label for="old_pass">Old password: </label>
        <input type="password" name="old_pass" required><br>
        <label for="new_pass">New password: </label>
        <input type="password" name="new_pass" required><br>
        <label for="confirm_pass">Confirm password: </label>
        <input type="password" name="confirm_pass" required><br>
        <button type="submit">Confirm</button>

    </form>
    <a href="./acc_home.php">Back</a>
</body>
</html>