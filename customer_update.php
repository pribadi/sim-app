<?php
    include("connect.php");

    $id = $_POST['id_customer'];
    $customer_name = $_POST['customer_name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $query = mysql_query("UPDATE customer SET customer_name='$customer_name', phone='$phone', address='$address' WHERE id_customer='$id'") OR DIE(mysql_error());

    if ($query) {
        echo "<script>window.alert('Customer Successfully Updated');</script>";
        echo "<script>window.location = 'customer_detail.php?id=$id';</script>";
        // header('Location:list_position.php?message=success');
    }


?>