<?php

    include("connect.php");

    $id_project = $_POST['id_project'];
    $task_name = $_POST['task_name'];
    $description = $_POST['description'];
    $start_task = $_POST['start_task'];
    $end_task = $_POST['end_task'];
    $id_crew = $_POST['id_crew'];
    $status = $_POST['status'];

    $query = "INSERT INTO task_project (id_project,task_name,description,start_task,end_task,id_crew,status) VALUES ('$id_project','$task_name','$description','$start_task','$end_task','$id_crew','$status')";

    $result = mysql_query($query);

    if ($result) {
        header("Location: project_detail.php?id=$id_project");
    } else {
        echo "gagal";
    }

?>