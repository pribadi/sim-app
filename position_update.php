<?php
    include("connect.php");

    $id = $_POST['id_position'];
    $name = $_POST['name'];

    $query = mysql_query("UPDATE position SET name='$name' WHERE id_position='$id'") OR DIE(mysql_error());

    if ($query) {
        echo "<script>window.alert('Position Successfully Updated');</script>";
        echo "<script>window.location = 'position_list.php';</script>";
        // header('Location:list_position.php?message=success');
    }

?>