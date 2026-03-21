<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5 php 😔😁</title>
</head>
<body>
    
    <?php
    
    $texto = ' A grama é azul';
    $texto = ltrim($texto); // tinha espaço esquerdo
    $texto = rtrim($texto); // tira espaço direito
    $texto = trim($texto); // tira espaços

    echo('<h1>'.$texto.'</h1> <hr>');
    echo('Tamanho do texto: '.strlen($texto).'<br>'); // saber tamanho do texto
    echo('Localização X do texto: '.strpos($texto, "g").'<br>'); // saber a localização do primeiro símbolo (ou palavra) dito (G neste caso)
    echo('Posição X do texto: '.$texto[3].'<br>'); // saber o que tem em certa posição
    echo('Posição do texto: '.substr($texto,2,9).'<br>'); // primeiro número: mostrar tudo começando por ali | segundo número: mostrar tudo antes daquilo
    echo('Maiúsculo: '.strtolower($texto).'<br>'); // mudar para minúsculo...
    echo('Maiúsculo: '.strtoupper($texto).'<br>'); // mudar para maiúsculo...
    echo('Justificado: '.ucfirst($texto).'<br>'); // só inicial maiúscula

    $palavra = 'grama';
    if(strpos($texto,$palavra)){ 
        echo('Tem a palavra "'.$palavra.'" na posição '.strpos($texto,$palavra).'😁');
    }else{
        echo('Não tem a palavra '.$palavra.'😔');
    }
    
    ?>

</body>
</html>