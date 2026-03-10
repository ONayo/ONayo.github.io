<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 php</title>
</head>
<body>
    
    <!-- @: tente mostrar a variável que estou pedindo, se não encontrar, ignore -->

    <?php
        echo('<h1>'.@$_POST['input1'].'</h1>');
    ?>

  <!-- <h1><?= @$_POST['input1']?></h1> ambos os dois códigos são a mesma coisa -->
    
   <!-- <a href="1.php">Voltar</a> -->

    <form action="1.php">
        <button type="submit">Voltar</button>
    </form> 
    <!-- para voltar ao outro site -->

</body>
</html>