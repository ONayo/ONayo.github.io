<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Adicionar funcionários </title>
</head>
<body>

    <h2>Adicionar Funcionário</h2>

    <form action="9-back.php" method="post">
        <input type="text" name="nome" max="64" min="3" placeholder="Nome"> <br>
        <input type="number" name="idade" placeholder="Idade"> <br>
        <input type="text" name="cargo" max="64" min="3" placeholder="Cargo"> <br>
        <button type="submit">Add</button>
    </form>

    <hr>

    <?php 
    
    $conexao = new mysqli('localhost', 'root', '', 'simyes');
    
    $sql = "SELECT * FROM workers";
    $resultado = $conexao->query($sql);

    // var_dump($resultado);

    echo('<table border>');
    echo('<tr>');
    echo('<th>ID</th><th>NOME</th><th>IDADE</th><th>CARGO</th>');
    echo('</tr>');
    while( $linha = $resultado->fetch_assoc() ){
        echo('<tr>');
        echo('<td>'.$linha['ID'].'</td>');
        echo('<td>'.$linha['nome'].'</td>');
        echo('<td>'.$linha['idade'].'</td>');
        echo('<td>'.$linha['cargo'].'</td>');
        echo('</tr>');
    }
    echo('</table');
    ?>

</body>
</html>