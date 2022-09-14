<?php
    require_once "includes/db.php";
    $settings = $_POST;
    foreach ($settings as $setting_name => $setting_value) {
        $cv_value = htmlentities($setting_value, ENT_QUOTES);
        $update_query = "UPDATE settings SET setting_value='$cv_value' WHERE setting_name='$setting_name'";
        mysqli_query($db_connect, $update_query);
    }

    header('location: settings.php');
?>