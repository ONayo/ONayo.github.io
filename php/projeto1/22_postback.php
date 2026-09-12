<?php 

session_start();
include_once('17_connection.php');

$titulo = $_POST['titulo'];
$texto = $_POST['texto'];
$autor = $_SESSION['id'];
date_default_timezone_set('America/Sao_Paulo');
$data = date("n/d/Y H:i");

$erros = [];
if( empty($titulo) ){
    $erros[] = 'Title box is empty <br>';
}
if ( strlen($titulo) > 50 ){
    $erros[] = 'Title is larger than acceptable <br>';
}
if( strlen($texto) > 250 ){
    $erros[] = 'Text is larger than acceptable <br>';
}
if( empty($texto) ){
    $erros[] = 'Text box is empty <br>';
}

if( empty($erros) ){
    $sql = "INSERT INTO posts (title, text, autor, date)
    VALUES ('$titulo', '$texto', '$autor', '$data')";
    $conexao->query($sql);
    unset($_SESSION['old']);
    header('Location: 23_forum.php');
}else{
    $_SESSION['erros'] = $erros;
    header('Location: 21_postmaker.php');
}
?>