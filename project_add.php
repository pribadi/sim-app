<?php

    include("connect.php");

    $id_user = $_POST['id_user'];
    $id_customer = $_POST['id_customer'];
    $project_name = $_POST['project_name'];
    $platform = $_POST['platform'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $url_demo = $_POST['url_demo'];
    $description = $_POST['description'];
    $status_project = $_POST['status_project'];


    $query = "INSERT INTO project (id_user,id_customer,project_name,platform,start,end,url_demo,description,status_project) VALUES ('$id_user','$id_customer','$project_name','$platform','$start','$end','$url_demo','$description','$status_project')";

    $result = mysql_query($query);

    $id_propos = 1;
    
    if ($result) {
        $query = "INSERT INTO project_participant (id_user,id_propos) VALUES ('$id_user','$id_propos')";
        header("Location: project_list.php");
    } else {
        echo "gagal";
    }

?>