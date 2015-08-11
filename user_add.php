<?php

    include("connect.php");

    $fullname       = $_POST['fullname'];
    $email          = $_POST['email'];
    $id_position    = $_POST['id_position'];
    $phone          = $_POST['phone'];
    $password       = md5($_POST['password']);

    // $setpassword1   = date('d-m-Y',strtotime($_POST['date_birth']));
    // $setpassword2   = explode("-", $setpassword1);
    // $setpassword3   = implode($setpassword2);
    // $password       = md5($setpassword3);

    $query = "INSERT INTO user (fullname,email,id_position,phone,password) VALUES ('$fullname','$email','$id_position','$phone','$password')";

    $result = mysql_query($query);

    if ($result) {
        header("Location: user_list.php");
    } else {
        echo "gagal";
    }

?>