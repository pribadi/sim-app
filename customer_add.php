<?php

    include("connect.php");

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $query = "INSERT INTO customer (name,phone,address) VALUES ('$name','$phone','$address')";

    $result = mysql_query($query);

    if ($result) {
        header("Location: customer_list.php");
    } else {
        echo "gagal";
    }

?>