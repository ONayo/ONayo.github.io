<?php 
$valor = $_GET['info'];
$conexao = new mysqli('localhost', 'root', '', 'simyes');
$sql = "DELETE FROM workers WHERE ID = '$valor'";
$resultado = $conexao->query($sql);
// REDIRECIONAR PARA OUTRA PÁGINA
        header('Location: 10-workers.php');

?>