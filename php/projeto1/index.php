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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/0/85.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h1>Hello <?= $usuario['nome'] ?></h1>

    <a href="20_logout.php">disconnect</a>

    <hr>

    <a href="21_postmaker.php">Posts</a>

    <hr>

    <a href="23_forum.php">Forum</a>

</body>
</html>