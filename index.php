<!--LOGIN PAGE PHP CODE-->
<?php include "./php/login.php"?>

<!--VON MAY CODE NG PHP SA LOOB NG FORM-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Document 2</title>

</head>
<body>
    <h1>LOGIN!!!</h1>
        <form method="post">
            <!-- MAY PHP CODE SA LOOB TONG EMAIL AT PASSWORD INPUT SA VALUE TAG -->
            <input type="email" name="email" required placeholder="Email Address" 

                value="<?= htmlspecialchars($_POST["email"] ?? "") ?>" ><br>

            <input type="password" name="password" required placeholder="Password" 
                
                value="<?= htmlspecialchars($_POST["password"] ?? "") ?>" ><br>

            <!-- PHP CODE VON -->
            <?php if ($isInvalid): ?>  
                <em style="color:red ;">email or password is invalid</em>
            <?php endif; ?><br>
            <button>LOGIN</button>
        </form>

    <a href="./views/signup.php">SIGNUP</a>

</body>
</html>
