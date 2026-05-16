<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Editar funcionários </title>
</head>
<body>

    <?php 
        $valor = $_GET['info'];
    ?>

    <h1>Editar Funcionário</h1>

    <form action="13-editar_back.php" method="post">
        <input type="number" name="id" value="<?=$valor?>" hidden>
        <input type="text" name="nome" max="64" min="3" placeholder="Nome"> <br>
        <input type="number" name="idade" placeholder="Idade"> <br>
        <input type="text" name="cargo" max="64" min="3" placeholder="Cargo"> <br>
        <button type="submit">Confirmar Edição</button>
    </form>


</body>
</html>