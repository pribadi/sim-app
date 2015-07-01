<?php

    include("connect.php");

    $id_project = $_POST['id_project'];
    $id_user = $_POST['id_user'];
    $project_position = $_POST['project_position'];

    $query = "INSERT INTO crew_project (id_project,id_user,project_position) VALUES ('$id_project','$id_user','$project_position')";

    $result = mysql_query($query);

    if ($result) {
        header("Location: project_detail.php?id=$id_project");
    } else {
        echo "gagal";
    }

?>