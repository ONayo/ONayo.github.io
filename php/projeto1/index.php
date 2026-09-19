<?php include_once('25_headerinfo.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/0/85.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php include_once('24_header.php'); ?>

    <h1>Hello <?= $usuario['nome'] ?>!</h1>

    <a href="20_logout.php">disconnect</a>

    <hr>

    <a href="21_postmaker.php">Posts</a>

    <hr>

    <a href="23_forum.php">Forum</a>

</body>
</html>