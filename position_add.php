<?php

    include("connect.php");

    $name = $_POST['name'];

    $query = "INSERT INTO position (name) VALUES ('$name')";

    $result = mysql_query($query);

    if ($result) {
        header("Location: position_list.php");
    } else {
        echo "gagal";
    }

?>