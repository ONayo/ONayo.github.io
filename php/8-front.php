<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Adicionar funcionários </title>
</head>
<body>

    <a href="10-workers.php">Ir para a lista</a>

    <h1>Adicionar Funcionário</h1>

    <form action="9-back.php" method="post">
        <input type="text" name="nome" max="64" min="3" placeholder="Nome"> <br>
        <input type="number" name="idade" placeholder="Idade"> <br>
        <input type="text" name="cargo" max="64" min="3" placeholder="Cargo"> <br>
        <button type="submit">Add</button>
    </form>


</body>
</html>