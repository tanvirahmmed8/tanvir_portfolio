<?php
    //print_r($_POST);
    session_start();
    $socialmedialink = $_POST['socialmedialink'];
    $socialmedia_icon = $_POST['socialmedia_icon'];
    if($socialmedialink && $socialmedia_icon){
        $insert_Query = "INSERT INTO socialmedias (socialmedialink, socialmedia_icon) VALUES ('$socialmedialink', '$socialmedia_icon')";
        require_once "includes/db.php";
        mysqli_query($db_connect, $insert_Query);
        $_SESSION["success"] = "Social Media Successfulli Added!";
        header("location:socialmedia_add.php");
    }else{
        if (!$socialmedialink) {
            $_SESSION["link_error"] = "Link Can not be Empty!";
            header("location:socialmedia_add.php");
        }
        
        if(!$socialmedia_icon){
            $_SESSION["icon_error"] = "Please Select your Social Media Icon!";
            header("location:socialmedia_add.php");
        }
    }
    

?>