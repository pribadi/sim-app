<?php
    include("connect.php");

    $customer_name  = $_POST['customer_name'];
    $customer_phone = $_POST['customer_phone'];
    $address        = $_POST['address'];

    $query = "INSERT INTO customer (customer_name,customer_phone,address) VALUES ('$customer_name','$customer_phone','$address')";

    $result = mysql_query($query);

    if ($result) {
        header("Location: customer_list.php");
    } else {
        echo "gagal";
    }

?>