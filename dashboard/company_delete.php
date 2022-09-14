<?php
    $id = $_GET['id'];
    require_once 'includes/db.php';
     //image delete
     $select_query = "SELECT `company_image` FROM `companies` WHERE id=$id";
     $company_image = mysqli_query($db_connect, $select_query);
     $image_name = mysqli_fetch_assoc($company_image );
     unlink('uploads/company_photos/'.$image_name['company_image']);
     //image delete
    $delete_query = "DELETE FROM `companies` WHERE id=$id";
    mysqli_query($db_connect, $delete_query);
    header('location: companies_add.php');
?>