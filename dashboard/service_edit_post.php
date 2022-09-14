<?php  
session_start();

$id = $_POST['id'];
$service_name = $_POST['service_name'];
$service_des = $_POST['service_des'];
$service_icon = $_POST['service_icon'];
$status = $_POST['status'];

require_once 'includes/db.php';
echo $service_query = "UPDATE `services` SET `service_name`='$service_name',`service_des`='$service_des',`service_icon`='$service_icon',`status`='$status' WHERE id=$id";
$service_update = mysqli_query($db_connect, $service_query);

header('location: services_list.php')

?>