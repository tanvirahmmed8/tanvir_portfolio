<?php 
    session_start();
    $id = $_GET['id'];

    require_once 'includes/db.php';

    $update_query = "UPDATE messages SET read_status='read' WHERE id=$id";
    mysqli_query($db_connect, $update_query);

    //$_SESSION['msg_id'] = $id;
    header("location: single_message.php?id=$id");