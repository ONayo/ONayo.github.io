<?php include_once('25_headerinfo.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Maker</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/0/85.png">
</head>
<body>
    
    <?php include_once('24_header.php'); ?>

    <form action="22_postback.php" method="POST">
        <span>Post Title</span>
        <input type="text" name="titulo"> <br>
        <span>Content</span>
        <textarea name="texto" id=""></textarea>
        <button type="submit">Post</button>
    </form>

    <div class="errorbox">
        <?php
            if(isset($_SESSION['erro'])){
                echo('<p>'.$_SESSION['erro'].'</php>');
            }
            unset($_SESSION['erro']);
            unset($_SESSION['old']);
        ?>
    </div>

</body>
</html>