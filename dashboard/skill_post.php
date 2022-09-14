<?php
    // print_r($_POST);
    $sujbect = $_POST['sujbect'];
    $year = $_POST['year'];
    $percentage = $_POST['percentage'];

    require_once "includes/db.php";
   echo $insart_query = "INSERT INTO skills (sujbect, year, percentage) VALUES ('$sujbect', '$year', '$percentage')";
    mysqli_query($db_connect, $insart_query);
    header('location:skill_add.php');
?>