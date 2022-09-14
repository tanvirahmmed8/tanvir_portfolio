<?php

    $id = $_GET['id'];
    require_once "includes/db.php";
    $delete_query = "DELETE FROM skills WHERE id=$id";

    mysqli_query($db_connect, $delete_query);
    header('location:skill_add.php');
?>