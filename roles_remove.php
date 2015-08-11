<?php
    include("connect.php");

    mysql_select_db("sim");
    mysql_query("DELETE FROM roles WHERE id_roles = '$_GET[id]'");
    echo "<script>window.alert('Roles Successfully Removed');</script>";
    echo "<script>window.location = 'roles_list.php';</script>";
?>