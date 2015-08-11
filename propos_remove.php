<?php
    include("connect.php");

    mysql_select_db("sim");
    mysql_query("DELETE FROM project_position WHERE id_propos = '$_GET[id]'");
    echo "<script>window.alert('Project Position Successfully Removed');</script>";
    echo "<script>window.location = 'propos_list.php';</script>";
?>