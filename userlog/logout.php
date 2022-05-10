<?php
session_start();
session_destroy();
header('location:../userlog/userlogin.php');
?>