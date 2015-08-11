<?php
    include("connect.php");

    $id           = $_POST['id_propos'];
    $propos_name  = $_POST['propos_name'];

    $query = mysql_query("UPDATE project_position SET propos_name='$propos_name' WHERE id_propos='$id'") OR DIE(mysql_error());

    if ($query) {
        echo "<script>window.alert('Project Position Successfully Updated');</script>";
        echo "<script>window.location = 'propos_list.php';</script>";
        // header('Location:list_position.php?message=success');
    }
?>