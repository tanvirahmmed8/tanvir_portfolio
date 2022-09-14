<?php

    $id = $_GET['id'];

    $delete_query = "DELETE FROM `socialmedias` WHERE id=$id";
    require_once "includes/db.php";
    mysqli_query($db_connect, $delete_query);
    header("location:socialmedia_add.php");