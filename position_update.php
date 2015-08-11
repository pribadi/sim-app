<?php
    include("connect.php");

    $id             = $_POST['id_position'];
    $position_name  = $_POST['position_name'];

    $query = mysql_query("UPDATE position SET position_name='$position_name' WHERE id_position='$id'") OR DIE(mysql_error());

    if ($query) {
        echo "<script>window.alert('Position Successfully Updated');</script>";
        echo "<script>window.location = 'position_list.php';</script>";
        // header('Location:list_position.php?message=success');
    }
?>