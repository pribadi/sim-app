<?php
    include("connect.php");

    $id = $_POST['id_status_project'];
    $name_status_project = $_POST['name_status_project'];

    $query = mysql_query("UPDATE status_project SET name_status_project='$name_status_project' WHERE id_status_project='$id'") OR DIE(mysql_error());

    if ($query) {
        echo "<script>window.alert('Project Status Successfully Updated');</script>";
        echo "<script>window.location = 'prostat_list.php';</script>";
        // header('Location:list_position.php?message=success');
    }

?>