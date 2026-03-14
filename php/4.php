<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listas</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/0/85.png">
    <link rel="stylesheet" href="4.css">
</head>
<body>
    
    <h1>Listas em php (arrays)</h1>

    <p>
        Uma lista (array) é uma variável que pode guardar multiplos valores ao mesmo tempo.
    </p>
    <hr>

    <?php 

    $alunos = ['Pedro', 'Roberto sem W', 'Robertow', 'Amanda sem Z', 'Amandaz', 'Pedro Reverso', 'Lo Siento Wilson'];

    // consultar item de certa posição
    echo('<div class="yellow">'.$alunos[1].'<br> </div>');
    
    // consultar tamanho da lista
    echo('<br>'.count($alunos).'<br>');

    // adicionar item

    /* $alunos[] = 'Enzooo' */ // ambos são a mesma coisa

    array_push($alunos, 'Enzooo'); // ambos são a mesma coisa

    // ver lista completa
    echo('<br>  <div class="green">');
    print_r($alunos);
    echo('</div>');

    // remover item

   /* array_pop($alunos); // remove último
    array_shift($alunos); // remove primeiro
    unset($alunos[2]); // remove posição específica */

   // ordenar itens

   sort($alunos);

   // embaralhar lista

   /* shuffle($alunos); */
    
   // LAÇOS DE REPETIÇÃO
    // começa em zero, termina em 10, e vai de 1 em 1
    echo('<br>'.'<br>');
    echo('<div class="blue">');
   for($i=0; $i<count($alunos); $i++){
    echo('aaa ');
    echo($i.' ');
    echo($alunos[$i].'<br>');
   }echo('</div>');

   echo('<br>');

   echo('<div class="red">');
   foreach ($alunos as $aluno){
    echo('Olá '.$aluno.'<br>');
   } echo('</div>');
    ?>

</body>
</html>