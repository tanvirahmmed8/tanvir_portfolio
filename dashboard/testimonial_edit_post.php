<?php

        $name = $_POST['name'];
        $designation = $_POST['designation'];
        $description = $_POST['description'];
        $id = $_POST['id'];

        print_r($_POST);
        require_once 'includes/db.php';
         $select_query = "SELECT image FROM testimonials WHERE id=$id";
        $img_from_db = mysqli_fetch_assoc(mysqli_query($db_connect, $select_query));
        $img_name = $img_from_db['image'];

    //die();
        
        // image start
            $uplodaded_file_name = $_FILES['image']['name']; 
            $uplodaded_file_explode = explode('.', $uplodaded_file_name);
            $uplodaded_file_extention = end($uplodaded_file_explode);
            $new_file_name = time().".".$uplodaded_file_extention;

            $temp_location = $_FILES['image']['tmp_name'];
            unlink('uploads/testimonials_photos/'.$img_name);
            $new_location = "uploads/testimonials_photos/".$new_file_name;
            move_uploaded_file($temp_location, $new_location);
        // image end


       
        $testimonial_query = "UPDATE `testimonials` SET `name`='$name',`designation`='$designation',`description`='$description',`image`='$new_file_name' WHERE id=$id";
        
        $testimonial_add = mysqli_query($db_connect, $testimonial_query);

        header('location:testimonial_list.php');

?>