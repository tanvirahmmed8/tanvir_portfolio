<?php
    session_start();
    //print_r($_POST);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];
    $message = htmlentities($msg, ENT_QUOTES);

    $flag = false;

    if (!$name) {
        $flag = true;
        $_SESSION["name_error"] = "Please Input Your Name";
    }

    if(!$email){
        $flag = true;
        $_SESSION["email_error"] = "Please Input Your E-Mail";
    }else{
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // echo $email."<br>";
        
        }else{
            $flag = true;
            $_SESSION["email_error"] = "Please Input a Valid E-Mail";
        }
    }

    if (!$message) {
        $flag = true;
        $_SESSION["message_error"] = "Please Input Your Message";
    }else{
        if (str_word_count($message) >= 250) {
            $_SESSION["message_error"] = "Message can't be more than 250 Word";
            $flag = true;
        }else{
            
        }
    }

    if($flag){
        header('location:index.php');
    }else{
        require_once "dashboard/includes/db.php";
        $insart_query = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";
        mysqli_query($db_connect, $insart_query);
        header('location:index.php');
    }