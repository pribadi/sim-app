<?php
    include("connect.php");

    mysql_select_db("sim");
    mysql_query("DELETE FROM position WHERE id_position = '$_GET[id]'");
    echo "<script>window.alert('Position Successfully Removed');</script>";
    echo "<script>window.location = 'position_list.php';</script>";
?>