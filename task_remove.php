<?php
    include("connect.php");

    mysql_query("DELETE FROM project_task WHERE id_task = '$_GET[id_task]'");

    echo "<script>window.alert('Task Project Successfully Removed');</script>";
    echo "<script>window.location = 'project_detail.php?id=$_GET[id_project]';</script>";
?>