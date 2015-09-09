<?php
    include("connect.php");

    $id             = $_POST['id_project'];
    $id_user        = $_POST['id_user'];
    $id_customer    = $_POST['id_customer'];
    $project_name   = $_POST['project_name'];
    $platform       = $_POST['platform'];
    $start          = $_POST['start'];
    $end            = $_POST['end'];
    $url_demo       = $_POST['url_demo'];
    $description    = $_POST['description'];
    $status_project = $_POST['status_project'];

    $query = mysql_query("UPDATE project SET id_user='$id_user', id_customer='$id_customer', project_name='$project_name', platform='$platform', start='$start', end='$end', url_demo='$url_demo', description='$description', status_project='$status_project' WHERE id_project='$id'") OR DIE(mysql_error());

    if ($query) {
        echo "<script>window.alert('Project Successfully Updated');</script>";
        echo "<script>window.location = 'project_detail.php?id=$id';</script>";
        // header('Location:list_position.php?message=success');
    }


?>