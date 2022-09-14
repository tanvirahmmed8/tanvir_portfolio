<?php
    //print_r($_POST);
    require_once 'includes/db.php';
    foreach ($_POST['name'] as $key => $value) {
        $delete_query = "DELETE FROM messages WHERE id=$value";
        mysqli_query($db_connect, $delete_query);
}
header('location: mailbox.php');


?>