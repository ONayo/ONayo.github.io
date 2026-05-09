<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de funcionários</title>
</head>
<body>
    
    <a href="8-front.php">Adicionar funcionários</a>

    <h1>Lista dos funcionários</h1>
    <?php 

    $conexao = new mysqli('localhost', 'root', '', 'simyes');
    
    $sql = "SELECT * FROM workers";
    $resultado = $conexao->query($sql);

    // var_dump($resultado);

    echo('<table border>');
    echo('<tr>
    <th>ID</th><th>NOME</th><th>IDADE</th><th>CARGO</th>
    </tr>');
    while( $linha = $resultado->fetch_assoc() ){

        echo('<tr>
            <td>'.$linha['ID'].'</td>
            <td>'.$linha['nome'].'</td>
            <td>'.$linha['idade'].'</td>
            <td>'.$linha['cargo'].'</td>
            <td><a href="11-deletar.php?info='.$linha['ID'].'" onclick="return confirm(`Tem certeza que deseja remove-lo?`)">Remover</a></td>
        <tr>');

    }
    echo('</table');

    ?>

</body>
</html>