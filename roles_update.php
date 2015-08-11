<?php
    include("connect.php");

    $id           = $_POST['id_roles'];
    $id_position  = $_POST['id_position'];
    $uri          = $_POST['uri'];

    $query = mysql_query("UPDATE roles SET id_position='$id_position', uri='$uri' WHERE id_roles='$id'") OR DIE(mysql_error());

    if ($query) {
        echo "<script>window.alert('Roles Successfully Updated');</script>";
        echo "<script>window.location = 'roles_list.php';</script>";
        // header('Location:list_position.php?message=success');
    }
?>