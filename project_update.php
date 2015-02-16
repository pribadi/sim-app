<?php
    include("connect.php");

    $id = $_POST['id_project'];
    $project_name = $_POST['project_name'];
    $description = $_POST['description'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $id_customer = $_POST['id_customer'];
    $value_project = $_POST['value_project'];
    $id_status_project = $_POST['id_status_project'];

    $query = mysql_query("UPDATE project SET project_name='$project_name', description='$description', start='$start', end='$end', id_customer='$id_customer', value_project='$value_project', id_status_project='$id_status_project' WHERE id_project='$id'") OR DIE(mysql_error());

    if ($query) {
        echo "<script>window.alert('Project Successfully Updated');</script>";
        echo "<script>window.location = 'project_detail.php?id=$id';</script>";
        // header('Location:list_position.php?message=success');
    }


?>