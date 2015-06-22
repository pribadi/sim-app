<?php

    include("connect.php");

    $project_name = $_POST['project_name'];
    $category = $_POST['category'];
    $platform = $_POST['platform'];
    $id_customer = $_POST['id_customer'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $value_project = $_POST['value_project'];
    $url_demo = $_POST['url_demo'];
    $description = $_POST['description'];
    $status_project = $_POST['status_project'];

    $query = "INSERT INTO project (project_name,category,platform,id_customer,start,end,value_project,url_demo,description,status_project) 
    VALUES ('$project_name','$category','$platform','$id_customer','$start','$end','$value_project','$url_demo','$description','$status_project')";

    $result = mysql_query($query);

    if ($result) {
        header("Location: project_list.php");
    } else {
        echo "gagal";
    }

?>