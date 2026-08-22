<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/0/85.png">
</head>
<body>
    
    <form action="19_login_back.php" method="POST">
        <h2>Log In</h2>
        <span>Email</span>
        <input type="email" name="email" value="<?= $_SESSION['old']['email'] ?? '' ?>"> <br>
        <span>Password</span>
        <input type="password" name="senha" value="<?= $_SESSION['old']['senha'] ?? '' ?>">
        <button type="submit">Log In</button>
    </form>

    <p>Haven't signed up yet? Sign up <a href="15_signup.php">here</a></p>

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