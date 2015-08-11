<?php
    include("connect.php");

    $id_position    = $_POST['id_position'];
    $uri            = $_POST['uri'];

    $query = "INSERT INTO roles (id_position,uri) VALUES ('$id_position','$uri')";
    $result = mysql_query($query);

    if ($result) {
        header("Location: roles_list.php");
    } else {
        echo "gagal";
    }

?>