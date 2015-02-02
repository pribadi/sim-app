<?php

    include("connect.php");

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

    $query = "INSERT INTO user (employee_number,fullname,email,place,date_birth,status,sex,religion,id_position,phone,address,salary) VALUES ('$employee_number','$fullname','$email','$place','$date_birth','$status','$sex','$religion','$id_position','$phone','$address','$salary')";

    $result = mysql_query($query);

    if ($result) {
        header("Location: user_list.php");
    } else {
        echo "gagal";
    }

?>