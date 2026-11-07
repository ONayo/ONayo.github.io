<?php include_once('25_headerinfo.php'); 

$id = $_GET['id'];
$sql = "SELECT * FROM contas WHERE id = '$id'";
$resultado = $conexao->query($sql);
$pessoa = $resultado->fetch_assoc();

if($pessoa['genero'] == 0){
    $genero = 'Did not say';
}else if($pessoa['genero'] == 1){
    $genero = 'Masculine';
}else if($pessoa['genero'] == 3){
    $genero = 'Feminine';
}else if($pessoa['genero'] == 4){
    $genero = 'Other';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/0/85.png">
</head>
<body>

    <?php include_once('24_header.php'); ?>

    <?php 
    if($id == $_SESSION['id']){
        echo('<a id="bautor" href="27_editprofile.php"><b>Edit Profile</b></a>');
    }
    ?>

    <div class="profileDiv">

            <div class="maininfo">
                <img class="pfp" src="photo_data/<?=$pessoa['foto']?>" alt="">
                <span class="BMS"><?=$pessoa['nome']?></span>
        </div>
            <div class="secinfo">
                <span>Birthdate: <?=$pessoa['nascimento']?></span>
                <span>Genre: <?=$genero?></span>
            </div>

    </div>

    <h1>Posts</h1>

    <div class="cards">

    <?php
    include_once('17_connection.php');

    $sql = "SELECT * FROM posts WHERE autor = '$id' ORDER BY ID DESC";
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
            <small>Autor: <a id="aautor" href="26_profile.php?id=<?=$autor['ID']?>"><?=$autor['nome']?></a></small>
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