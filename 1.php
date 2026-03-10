<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1 php</title>
</head>
<body>
    
    <form action="2.php" method="post">
        <input type="text" name="input1" placeholder="Fale alguma coisa"> <!-- name é o id do php --> 
        <button type="submit">Enviar</button> <!-- action é a tag link -->
    </form> <!-- isso tudo é para enviar o tal texto para o site "2.php" -->

    <br>

   <!-- <a href="2.php">Avançar sem falar</a> -->

    <form action="2.php" method="post">
        <button type="submit">Avançar sem falar</button>
    </form>

    <hr>

    <!-- rand é para mostrar algo aleatória mente -->
    <?php 
    echo(rand(1,10));
    ?>

<!-- X%Y mostra quanto sobra da divisão -->

</body>
</html>

<!-- http://localhost/xampp/ ao invés de go live 
 $ é variável-->