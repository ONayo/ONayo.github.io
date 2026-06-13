<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Editar funcionários </title>
    <link rel="stylesheet" href="12.css">
</head>
<body>

    <?php 
        $valor = $_GET['info'];

        include_once('14-connect.php');
        $sql = "SELECT * FROM workers WHERE ID = '$valor'";
        $resultado = $conexao->query($sql);

        $usuario = $resultado->fetch_assoc();
        $nome = $usuario['nome'];
        $idade = $usuario['idade'];
        $cargo = $usuario['cargo'];
    ?>

    <div class="central">
 
    <h1>Editar Funcionário</h1>

    <form class="form" action="13-editar_back.php" method="post">
        <input type="number" name="id" value="<?=$valor?>" hidden>
        <input type="text" name="nome" max="64" min="3" placeholder="Nome" value="<?=$nome?>"> <br>
        <input type="number" name="idade" placeholder="Idade" value="<?=$idade?>"> <br>
        <input type="text" name="cargo" max="64" min="3" placeholder="Cargo" value="<?=$cargo?>"> <br>
        <button type="submit">Confirmar Edição</button>
    </form>

    </div>

</body>
</html>