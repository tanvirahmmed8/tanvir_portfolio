<?php
//print_r($_POST);

$name = $_POST['name'];
$designation = $_POST['designation'];
$description = $_POST['description'];

// image start
    $uplodaded_file_name = $_FILES['image']['name']; 
    $uplodaded_file_explode = explode('.', $uplodaded_file_name);
    $uplodaded_file_extention = end($uplodaded_file_explode);
    $new_file_name = time().".".$uplodaded_file_extention;

    $temp_location = $_FILES['image']['tmp_name'];
    $new_location = "uploads/testimonials_photos/".$new_file_name;
    move_uploaded_file($temp_location, $new_location);
// image end


require_once 'includes/db.php';
$testimonial_query = "INSERT INTO `testimonials`(`name`, `designation`, `description`, `image`) VALUES ('$name','$designation','$description','$new_file_name')";
$testimonial_add = mysqli_query($db_connect, $testimonial_query);

header('location:testimonial_list.php');

?>