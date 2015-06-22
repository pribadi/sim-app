<?php

    include("connect.php");

    $customer_name = $_POST['customer_name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $query = "INSERT INTO customer (customer_name,phone,address) VALUES ('$customer_name','$phone','$address')";

    $result = mysql_query($query);

    if ($result) {
        header("Location: customer_list.php");
    } else {
        echo "gagal";
    }

?>