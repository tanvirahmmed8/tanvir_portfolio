<?php
$portfolio_category = $_POST['portfolio_category'];
$portfolio_name = $_POST['portfolio_name'];
$portfolio_details = $_POST['portfolio_details'];


require_once 'includes/db.php';
$portfolio_query = "INSERT INTO `portfolios`(`portfolio_category`, `portfolio_name`, `portfolio_details`) VALUES ('$portfolio_category','$portfolio_name', '$portfolio_details')";
$portfolio_add = mysqli_query($db_connect, $portfolio_query);
$insart_id = mysqli_insert_id($db_connect);
//image
$uplodaded_file_name = $_FILES['portfolio_image']['name']; 
$uplodaded_file_explode = explode('.', $uplodaded_file_name);
$uplodaded_file_extention = end($uplodaded_file_explode);
$new_file_name = $insart_id.".".$uplodaded_file_extention;

$temp_location = $_FILES['portfolio_image']['tmp_name'];
$new_location = "uploads/portfolio_image/".$new_file_name;
move_uploaded_file($temp_location, $new_location);
//image
$image_update = "UPDATE `portfolios` SET `portfolio_image`='$new_file_name' WHERE id=$insart_id";
mysqli_query($db_connect, $image_update);

header('location:portfolio.php');
?>

