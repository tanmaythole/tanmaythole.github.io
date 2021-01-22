<?php


    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $msg = $_POST['msg'];

        if(empty($name) || empty($email) || empty($subject) || empty($msg)){
            header('location:contact.php?error');
        }
        else{
            $to = "fantasycricketanalyser@gmail.com";

            /*ini_set("SMTP", "localhost");
            ini_set("smtp_port","25");
            ini_set("sendmail_from","tanmaythole1@gmail.com");
            ini_set("sendmail_path","\C:\xampp\sendmail\sendmail.exe\ -t");
*/
            if(mail($to,$subject,$msg,"FROM: $email")){
                header("location:contact.php?success");
            }

        }
    }
    else{
        header("location:contact.php");
    }

?>