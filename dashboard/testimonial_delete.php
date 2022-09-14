<?php

    $id = $_GET['id'];
    
    require_once "includes/db.php";
    //image delete
    $select_query = "SELECT `image` FROM `testimonials` WHERE id=$id";
    $testimonials = mysqli_query($db_connect, $select_query);
    $image_name = mysqli_fetch_assoc($testimonials );
    unlink('uploads/testimonials_photos/'.$image_name['image']);
    //image delete

     $delete_query = "DELETE FROM testimonials WHERE id=$id";
     mysqli_query($db_connect, $delete_query);
     header('location:testimonial_list.php');

?>