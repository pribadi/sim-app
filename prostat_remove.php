<?php
    include("connect.php");

    mysql_select_db("sim");
    mysql_query("DELETE FROM status_project WHERE id_status_project = '$_GET[id]'");
    echo "<script>window.alert('Project Status Successfully Removed');</script>";
    echo "<script>window.location = 'prostat_list.php';</script>";
?>