<?php
    include("connect.php");

    mysql_query("DELETE FROM project_timeline WHERE id_timeline = '$_GET[id_timeline]'");

    echo "<script>window.alert('Timeline Project Successfully Removed');</script>";
    echo "<script>window.location = 'project_detail.php?id=$_GET[id_project]';</script>";
?>