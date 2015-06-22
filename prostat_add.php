<?php

    include("connect.php");

    $name_status_project = $_POST['name_status_project'];

    $query = "INSERT INTO status_project (name_status_project) VALUES ('$name_status_project')";

    $result = mysql_query($query);

    if ($result) {
        header("Location: prostat_list.php");
    } else {
        echo "gagal";
    }

?>