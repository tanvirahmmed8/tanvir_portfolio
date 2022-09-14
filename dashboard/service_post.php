<?php  
session_start();

$service_name = $_POST['service_name'];
$service_des = $_POST['service_des'];
$service_icon = $_POST['service_icon'];
$status = $_POST['status'];

require_once 'includes/db.php';
$service_query = "INSERT INTO `services`(`service_name`, `service_des`, `service_icon`,`status`) VALUES ('$service_name','$service_des','$service_icon','$status')";
$service_add = mysqli_query($db_connect, $service_query);

header('location: services_list.php')

?>