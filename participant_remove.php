<?php
    include("connect.php");

    mysql_query("DELETE FROM project_participant WHERE id_participant = '$_GET[id]'");

    echo "<script>window.alert('Crew Project Successfully Removed');</script>";
    echo "<script>window.location = 'project_detail.php?id=$_GET[id_project]';</script>";
?>