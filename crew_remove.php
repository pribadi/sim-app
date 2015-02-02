<?php
    include("connect.php");

    // var_dump($_GET['id_project']);
    // exit();

    mysql_query("DELETE FROM crew_project WHERE id_crew = '$_GET[id]'");

    echo "<script>window.alert('Crew Project Successfully Removed');</script>";
    echo "<script>window.location = 'project_detail.php?id=$_GET[id_project]';</script>";
?>