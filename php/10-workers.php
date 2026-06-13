<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de funcionários</title>
    <link rel="stylesheet" href="10.css">
</head>
<body>
    
    <div class="central">

    <h1>Lista dos funcionários</h1>

    <form action="" method="post">
        <input name="searcher" type="text" placeholder="Nome">
        <button>Pesquisar</button>
    </form>

    <br>

    <?php 

    include_once('14-connect.php');
    
    $searcher = @$_POST['searcher'];
    $sql = "SELECT * FROM workers WHERE nome LIKE '%$searcher%'";
    $resultado = $conexao->query($sql);

    // var_dump($resultado);

    echo('<table>');
    echo('<tr>
    <th>ID</th><th>NOME</th><th>IDADE</th><th>CARGO</th>
    </tr>');
    while( $linha = $resultado->fetch_assoc() ){

        echo('<tr>
            <td>'.$linha['ID'].'</td>
            <td>'.$linha['nome'].'</td>
            <td>'.$linha['idade'].'</td>
            <td>'.$linha['cargo'].'</td>
            <td class="aaa"><a href="11-deletar.php?info='.$linha['ID'].'" onclick="return confirm(`Tem certeza que deseja remove-lo?`)">Remover</a></td>
            <td class="aaa"><a href="12-editar.php?info='.$linha['ID'].'" onclick="return confirm(`Tem certeza que deseja edita-lo?`)">Editar</a></td>
        </tr>');

    }
    echo('</table');

    ?>

    <div>
        <a class="aa" href="8-front.php">Adicionar funcionários</a>
    </div>

    </div>

</body>
</html>