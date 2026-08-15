<?php

    session_start();

    include_once('17_connection.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    
    // Correct email but wrong password

    $sql = "SELECT * FROM contas WHERE email = '$email' ";
    $resultado = $conexao->query($sql);

    if( $resultado->num_rows > 0 ){
        $usuario = $resultado->fetch_assoc();
        if( password_verify($usuario['senha'], $senha))
    }else{
        // Incorrect email
    }

?>