<?php
//print_r($_FILES);
    require_once "includes/db.php";
    // $select_query = "SELECT * FROM logo_images";
    // $img_name_from_db = mysqli_query($db_connect, $select_query);

    // foreach ($img_name_from_db as $img_name) {
    //    //echo $img_name['image_value'];
    // }
    
    //print_r($_POST);
    $logo_images = $_FILES;
    foreach ($logo_images as $image_type => $image) {
         $select_query = "SELECT image_value FROM logo_images WHERE image_type='$image_type'";
        $img_name_from_db = mysqli_fetch_assoc(mysqli_query($db_connect, $select_query))['image_value'];
        
        $uplodaded_file_name = $image['name']; 
        $uplodaded_file_explode = explode('.', $uplodaded_file_name);
        $uplodaded_file_extention = end($uplodaded_file_explode);
        if ($uplodaded_file_extention) {
        $new_file_name = $img_name_from_db; //time().rand(1111, 9999).".".$uplodaded_file_extention;
        $temp_location = $image['tmp_name'];
        $new_location = "uploads/logo_images/".$new_file_name;
        move_uploaded_file($temp_location, $new_location);
        //unlink('uploads/logo_images/'.$img_name_from_db);
        $p_photo_update_query = "UPDATE logo_images SET image_value='$new_file_name' WHERE image_type='$image_type'";
        mysqli_query($db_connect, $p_photo_update_query);
        header('location: logo_image_add.php');
     }else{
         echo 'Please select a Photo';
        }
    }



    // $uplodaded_file_name = $_FILES['profile_photo']['name']; 
    // $uplodaded_file_explode = explode('.', $uplodaded_file_name);
    // $uplodaded_file_extention = end($uplodaded_file_explode);

    // if ($uplodaded_file_extention) {
    //     $new_file_name = $id.".".$uplodaded_file_extention;
    //     $temp_location = $_FILES['profile_photo']['tmp_name'];
    //     $new_location = "uploads/profile_photos/".$new_file_name;
    //     move_uploaded_file($temp_location, $new_location);
    //     $p_photo_update_query = "UPDATE users SET profile_photo='$new_file_name' WHERE id=$id";
    //     mysqli_query($db_connect, $p_photo_update_query);
    //     header('location: profile.php');
    // }else{
    //     echo 'Please select a Photo';
    // }

?>