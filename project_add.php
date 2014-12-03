<?php

    include("connect.php");

    $name = $_POST['name'];
    $description = $_POST['description'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $id_customer = $_POST['id_customer'];

    $query = "INSERT INTO project (name,description,start,end,id_customer) VALUES ('$name','$description','$start','$end','$id_customer')";

    $result = mysql_query($query);

    if ($result) {
        header("Location: project_list.php");
    } else {
        echo "gagal";
    }

?>