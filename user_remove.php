<?php
    include("connect.php");

    mysql_select_db("sim");
    mysql_query("DELETE FROM user WHERE id_user = '$_GET[id]'");
    echo "<script>window.alert('User Successfully Removed');</script>";
    echo "<script>window.location = 'user_list.php';</script>";
?>