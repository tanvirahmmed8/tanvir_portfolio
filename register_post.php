<?php
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$flag = false;

if ($name) {
    // echo $name."<br>";
    $_SESSION["old_name"] = $name;
    
}else{
    $flag = true;
    $_SESSION["name_error"] = "Please Input Your Name";
    // header('location:register.php');
}

if ($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // echo $email."<br>";
    $_SESSION["old_email"] = $email;
    }else{
        $flag = true;
        $_SESSION["email_error"] = "Please Input a Valid E-Mail";
    }
    
}else{
    $flag = true;
    $_SESSION["email_error"] = "Please Input Your E-Mail";
}

if ($password) {
   
}else{
    $flag = true;
    $_SESSION["password_error"] = "Please Input Your Password";
}

if ($cpassword) {
    if ($password == $cpassword) {
        // Validate password strength
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
        $flag = true;
        $_SESSION["password_error"] = 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
    }else{
    // echo 'Strong password='.$password."<br>";
    }
    }else{
        $flag = true;
        $_SESSION["cpassword_error"] = "Your Password did not Match";
    }

}else{
    $flag = true;
    $_SESSION["cpassword_error"] = "Please Input Your Confirm Password";
}

if ($flag) {
    
    header('location:register.php');
}else{
    $epassword = md5($password);
    $db_connect = mysqli_connect('localhost', 'root', '', 'project_4');
    $email_duplicate = "SELECT COUNT(*) AS validity FROM users WHERE email = '$email'";
    $email_duplicate_result = mysqli_query($db_connect, $email_duplicate);
    
    
    if (mysqli_fetch_assoc($email_duplicate_result)['validity'] == 1) {
        $_SESSION["email_error"] = "This Mail Already have an account.";
        header('location:register.php');
    }else{
        $insart_query = "INSERT INTO `users`(`name`, `email`, `password`,`phone_number`) VALUES ('$name','$email','$epassword','$phone_number')";
        mysqli_query($db_connect, $insart_query);
        $_SESSION["register_success"] = "$name, Your account created successfully!";
        header('location:login.php');
    }
}

 
