<?php
session_start();
$db_connect = mysqli_connect('localhost', 'root', '', 'project_4');
if (isset($_POST['name_change'])) {
    if ($_POST['name']) {
        $old_name = $_SESSION['s_name'];
        $name = $_POST['name'];
        $id = $_SESSION['s_id'];
        $name_update_query = "UPDATE users SET name='$name' WHERE id=$id";
        mysqli_query($db_connect, $name_update_query);
        $_SESSION['s_name'] = $name;
        $_SESSION['name_change_status'] = "Your name changed successfully from <em> $old_name </em> to <em>$name</em>";
        header('location:profile.php');
    }else{
        
        $_SESSION['name_change_status'] = "Oops Name filed is Empty";
        header('location:profile.php');
    }

}

if (isset($_POST['photo_upload'])) {
    $id = $_SESSION['s_id'];
    $uplodaded_file_name = $_FILES['profile_photo']['name']; 
    $uplodaded_file_explode = explode('.', $uplodaded_file_name);
    $uplodaded_file_extention = end($uplodaded_file_explode);

    if ($uplodaded_file_extention) {
        $new_file_name = $id.".".$uplodaded_file_extention;
        $temp_location = $_FILES['profile_photo']['tmp_name'];
        $new_location = "uploads/profile_photos/".$new_file_name;
        move_uploaded_file($temp_location, $new_location);
        $p_photo_update_query = "UPDATE users SET profile_photo='$new_file_name' WHERE id=$id";
        mysqli_query($db_connect, $p_photo_update_query);
        header('location: profile.php');
    }else{
        echo 'Please select a Photo';
    }
    

}

if (isset($_POST['change_password'])) {
    $current_password = md5($_POST['current_password']);
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    $id = $_SESSION['s_id'];
    $password_check_query = "SELECT COUNT(*) AS password_check FROM users WHERE id=$id AND password='$current_password'";



    if (mysqli_fetch_assoc(mysqli_query($db_connect, $password_check_query))['password_check'] == 1) {

        if ($confirm_password) {
            if ($new_password == $confirm_password) {
                // Validate password strength
            $uppercase = preg_match('@[A-Z]@', $new_password);
            $lowercase = preg_match('@[a-z]@', $new_password);
            $number    = preg_match('@[0-9]@', $new_password);
            $specialChars = preg_match('@[^\w]@', $new_password);
        
            if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($new_password) < 8) {
                $_SESSION["password_error"] = 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
                header('location: profile.php');
            }else{
            // echo 'Strong password='.$password."<br>";
            $enc_pass = md5($confirm_password);
            $password_update_queary = "UPDATE users SET password='$enc_pass' WHERE id=$id";
            mysqli_query($db_connect, $password_update_queary);
            $_SESSION['pass_change_success'] = "Password changed successfully";
            header('location: profile.php');
            // echo 'Strong password='.$password."<br>";
            }
            }else{
                $_SESSION["cpassword_error"] = "Your New Password and Confirm Password did not Match";
                header('location: profile.php');
            }
        
        }else{
            $_SESSION["cpassword_error"] = "Please Input Your Confirm Password";
            header('location: profile.php');
        }

       
    }else{
        $_SESSION['pass_error'] = "Wrong Current Pasword!";
        header('location: profile.php');
    }
 
    
}

if (isset($_POST['phone_number_upload'])) {
   if ($_POST['phone_number']) {
    $phone_number = $_POST['phone_number'];
    $id = $_SESSION['s_id'];

    $phone_number_update_queary = "UPDATE users SET phone_number='$phone_number' WHERE id=$id";
            mysqli_query($db_connect, $phone_number_update_queary);
            $_SESSION['phone_number_change_success'] = "Phone number changed successfully";
            header('location: profile.php');
   }else{
    $_SESSION['phone_number_empty'] = "Phone number Empty!";
    header('location: profile.php');
   }
}
?>