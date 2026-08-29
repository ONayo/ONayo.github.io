<?php 

session_start();
unset($_SESSION['id']);
header('Location: 18_login.php');

?>