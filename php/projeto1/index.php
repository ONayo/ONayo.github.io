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
    
    <?php include_once('24_2_header.php'); ?>
    <div class="mar50"></div>

    <h1>Search base</h1>

        <form action="" method="POST">
        <h2>What would you like to search?</h2>
        <input type="text" name="nome" placeholder="Post or Profile name" value="">
        <select name="searchtype" value="">
            <option>Posts</option>
            <option>Profiles</option>
        </select>
        <button type="submit">Search</button>
    </form>

</body>
</html>