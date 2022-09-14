<?php
    $id = $_GET['id'];
    require_once 'includes/db.php';
    $delete_query = "DELETE FROM `services` WHERE id=$id";
    mysqli_query($db_connect, $delete_query);
    header('location:services_list.php');
?>