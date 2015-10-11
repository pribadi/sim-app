<?php
    include("connect.php");

    $id                 = $_POST['id_user'];
    $old_password       = md5($_POST['old_password']);
    $new_password       = md5($_POST['new_password']);
    $retype_password    = md5($_POST['retype_password']);

    if ($new_password == $retype_password) {
        $cekuser ="SELECT * FROM user WHERE id_user = '$id' AND password = '$old_password'";
        $querycekuser = mysql_query($cekuser);

        $count = mysql_num_rows($querycekuser);

        if ($count >= 1){

            $updatepassword = "UPDATE user SET password = '$new_password' WHERE id_user = '$id'";

            $updatequery = mysql_query($updatepassword);

            if($updatequery)

            {
            echo "<script>window.alert('Password Successfully Updated');</script>";
            echo "<script>window.location = 'setting.php?id=$id';</script>";
            }

        } else {
            echo "<script>window.alert('Password Anda Salah');</script>";
            echo "<script>window.location = 'setting.php?id=$id';</script>";    
        }
        
    } else {
        echo "<script>window.alert('Password Anda Tidak Cocok');</script>";
        echo "<script>window.location = 'setting.php?id=$id';</script>";
    }

?>