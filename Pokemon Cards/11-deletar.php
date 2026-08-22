<?php 
$valor = $_GET['info'];
include_once('14-connect.php');
$sql = "DELETE FROM workers WHERE ID = '$valor'";
$resultado = $conexao->query($sql);
// REDIRECIONAR PARA OUTRA PÁGINA
        header('Location: 10-workers.php');

?>