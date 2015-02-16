<?php

    include("connect.php");

    $project_name = $_POST['project_name'];
    $description = $_POST['description'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $id_customer = $_POST['id_customer'];
    $value_project = $_POST['value_project'];
    $id_status_project = $_POST['id_status_project'];

    $query = "INSERT INTO project (project_name,description,start,end,id_customer,value_project,id_status_project) VALUES ('$project_name','$description','$start','$end','$id_customer','$value_project','$id_status_project')";

    $result = mysql_query($query);

    if ($result) {
        header("Location: project_list.php");
    } else {
        echo "gagal";
    }

?>