<?php
session_start();
?>
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
        <h2>Create An Account</h2>
        <span>name</span> 
        <input type="text" name="nome" value="<?= $_SESSION['old']['nome'] ?? '' ?>"> <br>
        <span>email</span>
        <input type="email" name="email" value="<?= $_SESSION['old']['email'] ?? '' ?>"> <br>
        <span>birthday</span> 
        <input type="date" name="nascimento" value="<?= $_SESSION['old']['date'] ?? '' ?>"> <br>
        <span>genre</span>
        <select id="" name="genero" value="<?= $_SESSION['old']['genero'] ?? '' ?>">
            <option>do not say</option>
            <option>masculine</option>
            <option>feminine</option>
            <option>other</option>
        </select> <br>
        <span>profile picture</span>
        <input type="file" name="foto" value="<?= $_SESSION['old']['foto'] ?? '' ?>"> <br>
        <span>password</span>
        <input type="password" name="senha" value="<?= $_SESSION['old']['senha'] ?? '' ?>"> <br>
        <span>confirm password</span>
        <input type="password" name="confsenha" value="<?= $_SESSION['old']['confsenha'] ?? '' ?>">
        <button type="submit">Join</button>
    </form>
    <p>Already have signed up? Log in <a href="18_login.php">here</a></p>

    <div class="errorbox">
        <?php
            if(isset($_SESSION['erros'])){
                foreach($_SESSION['erros'] as $erro){
                    echo('<p>'.$erro.'</php>');
                }
            }
            unset($_SESSION['erros']);
            unset($_SESSION['old']);
        ?>
    </div>

</body>
</html>