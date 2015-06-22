<?php
    include("connect.php");

    mysql_query("DELETE FROM project WHERE id_project = '$_GET[id]'");

    echo "<script>window.alert('Project Successfully Removed');</script>";
    echo "<script>window.location = 'project_list.php'</script>";
?>