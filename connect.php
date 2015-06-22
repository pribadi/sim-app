<?php
    $server = "localhost";
    $username = "root";
    $password = "password";
    $database = "sim";

    mysql_connect($server,$username,$password) or die ("koneksi gagal");
    mysql_select_db($database) or die ("database tidak ditemukan");
?>