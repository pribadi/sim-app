<?php
    include("connect.php");

    $id = $_POST['id_project'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $id_customer = $_POST['id_customer'];

    $query = mysql_query("UPDATE project SET name='$name', description='$description', start='$start', end='$end', id_customer='$id_customer' WHERE id_project='$id'") OR DIE(mysql_error());

    if ($query) {
        echo "<script>window.alert('Project Successfully Updated');</script>";
        echo "<script>window.location = 'project_detail.php?id=$id';</script>";
        // header('Location:list_position.php?message=success');
    }


?>