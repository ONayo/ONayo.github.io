<?php include_once('25_headerinfo.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/0/85.png">
</head>
<body>

    <?php include_once('24_header.php'); ?>


    <div class="cards">
    <?php
    include_once('17_connection.php');

    $sql = "SELECT * FROM posts ORDER BY ID DESC";
    $resultado = $conexao->query($sql);

    while( $post = $resultado->fetch_assoc() ){

        $idautor = $post['autor'];
        $sql = "SELECT * FROM contas WHERE ID = '$idautor'";
        $resultado2 = $conexao->query($sql);
        $autor = $resultado2->fetch_assoc();

?>
        <div class="post">
            <h2><?=$post['title']?></h2>
            <p class="ppost"><?=$post['text']?></p>
            <small>Autor: <?=$autor['nome']?></small>
        <!--    <img class="photo" src="photo_data/<?=$autor['foto']?>" alt=""> -->
            <br>
            <small>Date: <?=$post['date']?></small>
        </div>

 <?php
    }
    ?>
    </div>


</body>
</html>