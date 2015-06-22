<?php
    include("connect.php");

    mysql_select_db("sim");
    mysql_query("DELETE FROM customer WHERE id_customer = '$_GET[id]'");
    echo "<script>window.alert('Customer Successfully Removed');</script>";
    echo "<script>window.location = 'customer_list.php';</script>";
?>