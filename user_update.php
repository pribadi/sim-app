<?php
    include("connect.php");

    $id = $_POST['id_user'];
    $employee_number = $_POST['employee_number'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $place = $_POST['place'];
    $date_birth = $_POST['date_birth'];
    $status = $_POST['status'];
    $sex = $_POST['sex'];
    $religion = $_POST['religion'];
    $id_position = $_POST['id_position'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];

    $query = mysql_query("UPDATE user SET employee_number='$employee_number', fullname='$fullname', email='$email', place='$place', date_birth='$date_birth', status='$status', sex='$sex', religion='$religion', id_position='$id_position', phone='$phone', address='$address', salary='$salary' WHERE id_user='$id'") OR DIE(mysql_error());

    if ($query) {
        echo "<script>window.alert('User Successfully Updated');</script>";
        echo "<script>window.location = 'user_detail.php?id=$id';</script>";
        // header('Location:list_position.php?message=success');
    }


?>