<?php
    include("connect.php");

    $id = $_POST['id_project'];
    $project_name = $_POST['project_name'];
    $category = $_POST['category'];
    $platform = $_POST['platform'];
    $id_customer = $_POST['id_customer'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $value_project = $_POST['value_project'];
    $url_demo = $_POST['url_demo'];
    $description = $_POST['description'];
    
    $status_project = $_POST['status_project'];

    $query = mysql_query("UPDATE project SET project_name='$project_name', category='$category', platform='$platform', id_customer='$id_customer', start='$start', end='$end', value_project='$value_project', url_demo='$url_demo', description='$description', status_project='$status_project' WHERE id_project='$id'") OR DIE(mysql_error());

    if ($query) {
        echo "<script>window.alert('Project Successfully Updated');</script>";
        echo "<script>window.location = 'project_detail.php?id=$id';</script>";
        // header('Location:list_position.php?message=success');
    }


?>