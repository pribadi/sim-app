<?php
    include("connect.php");

    $id = $_POST['id_propos'];
    $name = $_POST['name'];
    $presentase = $_POST['presentase'];

    $query = mysql_query("UPDATE project_position SET name='$name', presentase='$presentase' WHERE id_propos='$id'") OR DIE(mysql_error());

    if ($query) {
        echo "<script>window.alert('Project Position Successfully Updated');</script>";
        echo "<script>window.location = 'propos_list.php';</script>";
        // header('Location:list_position.php?message=success');
    }

?>