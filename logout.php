<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['name']);
unset($_SESSION['email']);
unset($_SESSION['uname']);
unset($_SESSION['adname']);
unset($_SESSION['islogin']);
session_destroy();
session_start();
$_SESSION['msglogout'] = 'YOU ARE LOGGED OUT ! ';
header('location:./login');
?>