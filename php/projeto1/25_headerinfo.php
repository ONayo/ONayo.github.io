<?php
session_start();
include_once('17_connection.php');

if( !(isset($_SESSION['id'])) ){
    header('Location: 18_login.php');
}

$idusuario = $_SESSION['id'];
$sql = "SELECT * FROM contas WHERE ID = '$idusuario'";
$retorno = $conexao->query($sql);
$usuario = $retorno->fetch_assoc();
?>