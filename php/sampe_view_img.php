<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $mysqli = require __DIR__ . "/database_conn.php";
       
        $sql = "SELECT * FROM sample_img";
        $res = mysqli_query($mysqli, $sql);

        if(mysqli_num_rows($res) > 0 ){
            while ($images = mysqli_fetch_assoc($res)) { ?>

                <div class = "alb">
                    <img src="">
                </div>

          <?php  }
        } ?>
    
</body>
</html>