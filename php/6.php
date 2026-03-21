<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista 🤔</title>
</head>
<body>
    
    <?php
    
    $lista = [' Vamie', ' Vunoa', ' Limu', ' Bela', ' Bole'];

    echo('<ul>');
    foreach($lista as $pessoa){
        if(strpos($pessoa,'e')){
            echo('<li>'.$pessoa.'</li>');
        }
    }
    echo('</ul>');
    
    ?>

</body>
</html>