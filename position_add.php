<?php
    include("connect.php");

    $position_name  = $_POST['position_name'];

    $query = "INSERT INTO position (position_name) VALUES ('$position_name')";

    $result = mysql_query($query);

    if ($result) {
        header("Location: position_list.php");
    } else {
        echo "gagal";
    }

?>