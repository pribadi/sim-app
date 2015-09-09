<?php

    include("connect.php");

    $id_project     = $_POST['id_project'];
    $timeline_name  = $_POST['timeline_name'];
    $start_time     = $_POST['start_time'];
    $end_time       = $_POST['end_time'];
    
    $query = "INSERT INTO project_timeline (id_project,timeline_name,start_time,end_time) VALUES ('$id_project','$timeline_name','$start_time','$end_time')";

    $result = mysql_query($query);

    if ($result) {
        header("Location: project_detail.php?id=$id_project");
    } else {
        echo "gagal";
    }

?>