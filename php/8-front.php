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
        <input type="text" name="nome" max="64" min="3" placeholder="Nome"> 
        <input type="number" name="idade" placeholder="Idade">
        <input type="text" name="cargo" max="64" min="3" placeholder="Cargo"> <br>
        <button type="submit">Add</button>
    </form>

</body>
</html>