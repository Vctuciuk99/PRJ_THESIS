<?php 
    if(isset($_POST['submit']) && isset($_POST)) {
        echo "<pre>";
        print_r($_FILES['verify']);
        echo "</pre>";

        $img_name = $_FILES['verify']['name'];
        $img_size = $_FILES['verify']['size'];
        $tmp_name = $_FILES['verify']['tmp_name'];
        $error = $_FILES['verify']['error'];

        if ($error === 0) {
            //restrict file size
            if ($img_size > 125000) {
                $em = "File is to large";
                header("Location: ../views/acc_home.php?error=$em");
            } else {
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);

                //check file type
                $allowed_exs = array("jpg", "jpeg", "png");

                if(in_array($img_ex_lc, $allowed_exs)) {
                    
                    
                }else {
                    $em = "You can't upload files of this type";
                    header("Location: ../views/acc_home.php?error=$em");
                }
            }
        } else {
            $em = "unknown eror occured!";
            header("Locaion: ../views/acc_home.php?error=$em");
        }

    }else {
        header("Location: ../views/acc_home.php");
    }
?>

