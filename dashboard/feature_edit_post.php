<?php
//session_start();
$id = $_POST['id'];
$features_name = $_POST['features_name'];
$features_count = $_POST['features_count'];
$features_icon = $_POST['features_icon'];


require_once 'includes/db.php';
echo $features_query = "UPDATE features SET features_name='$features_name',features_count='$features_count',features_icon='$features_icon' WHERE id=$id";
$features_update = mysqli_query($db_connect, $features_query);
//$_SESSION["success"] = "Feature added successfully";

header('location: feature_list.php');
?>