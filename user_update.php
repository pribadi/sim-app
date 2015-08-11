<?php
    include("connect.php");

    $id             = $_POST['id_user'];
    $fullname       = $_POST['fullname'];
    $email          = $_POST['email'];
    $id_position    = $_POST['id_position'];
    $phone          = $_POST['phone'];

    $query = mysql_query("UPDATE user SET fullname='$fullname', email='$email', id_position='$id_position', phone='$phone' WHERE id_user='$id'") OR DIE(mysql_error());

    if ($query) {
        echo "<script>window.alert('User Successfully Updated');</script>";
        echo "<script>window.location = 'user_list.php';</script>";
        // header('Location:list_id_position.php?message=success');
    }
?>