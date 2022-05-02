<!--LOGIN PAGE PHP CODE-->
<?php
$isInvalid = false;

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
                                    
        $mysqli = require __DIR__ . "/database_conn.php";

        $sql = sprintf("SELECT * FROM  user_personal_info WHERE Email = '%s'",
                        $mysqli->real_escape_string($_POST["email"]));

        $_result = $mysqli->query($sql);

        $user= $_result->fetch_assoc();

        //check email password auth
        if ($user) {
            if (password_verify($_POST["password"], $user["Password_Hash"])) {
                
                session_start();
                session_regenerate_id();

                $_SESSION["session_id"] = $user["Employee_No"];

                header("Location: ./views/acc_home.php");
                exit;

            }
        }
        $isInvalid = true;
    }

?>