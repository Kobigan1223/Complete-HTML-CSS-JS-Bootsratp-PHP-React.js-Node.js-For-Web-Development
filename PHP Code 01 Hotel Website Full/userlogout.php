<?php
session_start(); 
$_SESSION = array();

unset($_SESSION['login']);
session_destroy(); // destroy session
header("location:index.php"); 
?>
