<?php

    include("connect.php");

    $id_project = $_POST['id_project'];
    $id_user    = $_POST['id_user'];
    $id_propos  = $_POST['id_propos'];

    $query = "INSERT INTO project_participant (id_project,id_user,id_propos) VALUES ('$id_project','$id_user','$id_propos')";

    $result = mysql_query($query);

    if ($result) {
        header("Location: project_detail.php?id=$id_project");
    } else {
        echo "gagal";
    }

?>