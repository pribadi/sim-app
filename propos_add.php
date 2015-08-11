<?php
    include("connect.php");

    $propos_name  = $_POST['propos_name'];

    $query = "INSERT INTO project_position (propos_name) VALUES ('$propos_name')";

    $result = mysql_query($query);

    if ($result) {
        header("Location: propos_list.php");
    } else {
        echo "gagal";
    }

?>