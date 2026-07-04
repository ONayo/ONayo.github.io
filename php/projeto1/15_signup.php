<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="">
</head>
<body>

    <form action="16_signup_back.php" method="POST">
        <h2>Criar Conta</h2>
        <span>name</span> 
        <input type="text" name="nome"> <br>
        <span>email</span>
        <input type="email" name="email"> <br>
        <span>birthday</span> 
        <input type="date" name="nascimento"> <br>
        <span>genre</span>
        <select id="" name="genero">
            <option>don't say</option>
            <option>masculine</option>
            <option>feminine</option>
            <option>other</option>
        </select> <br>
        <span>profile picture</span>
        <input type="file" name="foto"> <br>
        <span>password</span>
        <input type="password" name="senha"> <br>
        <span>confirm password</span>
        <input type="password" name="confsenha">
        <button type="submit">Join</button>
    </form>

</body>
</html>