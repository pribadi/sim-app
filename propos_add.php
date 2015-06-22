<?php

    include("connect.php");

    $name = $_POST['name'];
    $presentase = $_POST['presentase'];

    $query = "INSERT INTO project_position (name,presentase) VALUES ('$name','$presentase')";

    $result = mysql_query($query);

    if ($result) {
        header("Location: propos_list.php");
    } else {
        echo "gagal";
    }

?>