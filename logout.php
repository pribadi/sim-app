<?php 
session_start(1);
unset($_SESSION['id_user']);
unset($_SESSION['fullname']);
unset($_SESSION['position']);
session_destroy(1);
header("Location: login.php");
 ?>