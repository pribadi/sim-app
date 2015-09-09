<?php

    include("connect.php");

    $id_project         = $_POST['id_project'];
    $id_participant     = $_POST['id_participant'];
    $task_name          = $_POST['task_name'];
    $task_description   = $_POST['task_description'];
    $start_task         = $_POST['start_task'];
    $end_task           = $_POST['end_task'];
    $status             = $_POST['status'];
    
    $query = "INSERT INTO project_task (id_project,id_participant,task_name,task_description,start_task,end_task,status) VALUES ('$id_project','$id_participant','$task_name','$task_description','$start_task','$end_task','$status')";

    $result = mysql_query($query);

    if ($result) {
        header("Location: project_detail.php?id=$id_project");
    } else {
        echo "gagal";
    }

?>