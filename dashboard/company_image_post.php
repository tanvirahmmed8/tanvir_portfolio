<?php 
   // print_r($_FILES);

    $uplodaded_file_name = $_FILES['company_image']['name']; 
    $uplodaded_file_explode = explode('.', $uplodaded_file_name);
    $uplodaded_file_extention = end($uplodaded_file_explode);
    $new_file_name = time().".".$uplodaded_file_extention;

    $temp_location = $_FILES['company_image']['tmp_name'];
    $new_location = "uploads/company_photos/".$new_file_name;
    move_uploaded_file($temp_location, $new_location);
    //echo $new_file_name;
    require_once "includes/db.php";
    $insart_query = "INSERT INTO `companies`(`company_image`) VALUES ('$new_file_name')";
    mysqli_query($db_connect, $insart_query);
    
    header('location: companies_add.php');
?>