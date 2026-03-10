<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3 php</title>
</head>
<body>
    
    <h1>Par ou ímpar</h1>

    <form action="" method="post">
        <select name="escolha" id="">
            <option value="par">Par</option>
            <option value="impar">Ímpar</option>
        </select>
        <input type="number" max="10" name="input2" placeholder="Fale alguma coisa"> 
        <button type="submit">Enviar</button>
    </form> 
    <br>
    <?php 
    $escolha = @$_POST['escolha'];
    $valor = @$_POST['input2'];
    $valorpc = rand(0, 10);
    $somavalor = $valor+$valorpc;

    echo('Jogador: '.$valor.'<br> <br>'.'GPU: '.$valorpc.'<br> <br>'.'<p>Você escolheu:</p> '.$escolha);

    if ( $somavalor%2 == 0) {
        $resultado = 'par';
    }else{
        $resultado = 'impar';
    }

    if ($resultado == $escolha) {
        echo('<br> <br>'.'Você ganhou!👍');
    }else{
        echo('<br> <br>'.'Você perdeu!!!👎');
    }
    ?>

</body>
</html>