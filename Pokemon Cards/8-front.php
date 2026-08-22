<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Add Pokedex </title>
    <link rel="stylesheet" href="8.css">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/0/85.png">
</head>
<body>

    <?php
    session_start(); 
    ?>
    <div class="central">

    <h1>Add Pokedex</h1>

    <form class="form" action="9-back.php" method="post">
        <input type="text" name="nome" max="64" min="3" placeholder="Pokemon Name" value="<?= $_SESSION['previous']['nome'] ?? '' ?>"> <br>
        <input type="number" name="idade" placeholder="Pokedex Number" value="<?= $_SESSION['previous']['idade'] ?? '' ?>"> <br>
        <input type="file" name="card" placeholder="Card Image" value="<?= $_SESSION['previous']['idade'] ?? '' ?>"> <br>
        <button type="submit">Add</button>
    </form> <br>

    <a href="10-workers.php">Ir para a lista</a>

    </div>

    <div class="erros">
        <?php
        if(isset($_SESSION['erros'])){
            foreach($_SESSION['erros'] as $erro){
                echo('<p class="erro">'.$erro.'</p>');
            }
        }
        unset($_SESSION['erros']);
        unset($_SESSION['previous']);
        ?>
    </div>

</body>
</html>