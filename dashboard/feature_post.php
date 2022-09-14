<?php
session_start();
$features_name = $_POST['features_name'];
$features_count = $_POST['features_count'];
$features_icon = $_POST['features_icon'];


require_once 'includes/db.php';
$features_query = "INSERT INTO `features`(`features_name`, `features_count`, `features_icon`) VALUES ('$features_name','$features_count','$features_icon')";
$features_add = mysqli_query($db_connect, $features_query);
$_SESSION["success"] = "Feature added successfully";

header('location: feature_list.php');
?>