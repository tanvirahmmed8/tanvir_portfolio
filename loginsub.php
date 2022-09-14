<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$flag = false;


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
    $_SESSION["pass_error"] = "Please Input Password";
    
}





if ($flag) {
    
    header('location:login.php');
}else{
    $epass = md5($password);
    $db_connect = mysqli_connect('localhost', 'root', '', 'project_4');
    $select_count_query = "SELECT COUNT(*) AS 'result' FROM users WHERE email='$email' AND password='$epass'";
    $from_db = mysqli_query($db_connect, $select_count_query);


    if (mysqli_fetch_assoc($from_db)['result'] == 1) {
        $_SESSION['s_email'] = $email;
        $select_data = "SELECT id, name FROM `users` WHERE email='$email' ";
        $data = mysqli_fetch_assoc(mysqli_query($db_connect, $select_data));
        $_SESSION['s_id'] = $data['id'];
        $_SESSION['s_name'] = $data['name'];
        header('location:dashboard/dashboard.php');
    }else{
        // $flag = true;
        $_SESSION["emailpass_error"] = "Invalid email or password.";
        header('location:login.php');
    }
    
}
