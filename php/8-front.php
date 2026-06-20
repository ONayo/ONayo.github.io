<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Adicionar funcionários </title>
    <link rel="stylesheet" href="8.css">
</head>
<body>

    <div class="central">

    <h1>Adicionar Funcionário</h1>

    <form class="form" action="9-back.php" method="post">
        <input type="text" name="nome" max="64" min="3" placeholder="Nome"> <br>
        <input type="number" name="idade" placeholder="Idade"> <br>
        <select name="cargo">
            <option>Estagiário</option>
            <option>Contador</option>
            <option>Engenheiro</option>
            <option>Mecânico</option>
            <option>Designer de interiores</option>
            <option>Webdesigner</option>
            <option>Cozinheiro</option>
            <option>Secretário</option>
            <option>Inspetor de segurança</option>
            <option>Interações estrangeiras</option>
            <option>Programador</option>
            <option>Técnico de segurança</option>
            <option>Adiministrador Geral</option>
            <option>Faxineiro</option>
            <option>Pedreiro</option>
            <option>Assistente</option>
        </select> <br>
        <button type="submit">Add</button>
    </form> <br>

    <a href="10-workers.php">Ir para a lista</a>

    </div>

    <div class="erros">
        <?php
        session_start(); 
        if(isset($_SESSION['erros'])){
            foreach($_SESSION['erros'] as $erro){
                echo('<p class="erro">'.$erro.'</p>');
            }
        }
        unset($_SESSION['erros']);
        ?>
    </div>

</body>
</html>