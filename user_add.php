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


    $username = $_POST['employee_number'];

    $setpassword1 = date('d-m-Y',strtotime($_POST['date_birth']));
    $setpassword2 = explode("-", $setpassword1);
    $setpassword3 = implode($setpassword2);
    $password = md5($setpassword3);
    // var_dump($_POST);
    // var_dump($username);
    // var_dump($setpassword3);
    // var_dump($password);
    // exit();

    $query = "INSERT INTO user (employee_number,fullname,email,place,date_birth,status,sex,religion,id_position,phone,address,salary,username,password) VALUES ('$employee_number','$fullname','$email','$place','$date_birth','$status','$sex','$religion','$id_position','$phone','$address','$salary','$username','$password')";

    $result = mysql_query($query);

    if ($result) {
        header("Location: user_list.php");
    } else {
        echo "gagal";
    }

?>