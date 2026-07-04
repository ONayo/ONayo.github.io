<?php 

include_once('17_connection.php');

# pegar informações do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$nascimento = $_POST['nascimento'];
$genero = $_POST['genero'];
$foto = $_POST['foto'];
$senha = $_POST['senha'];
$confsenha = $_POST['confsenha'];

# validar informações
$erros = [];

if( empty($name) ){
    $erros[] = 'Nome não dito';
}
if ( strlen($nome) < 3 ){
    $erros[] = 'Nome pequeno'
}
if( empty($foto) ){
    $erros[] = 'Foto não enviada';
}
if( empty($senha) ){
    $erros[] = 'Senha não informada';
}
if ( $senha != $confsenha ){
    $erros[] = 'Senhas divergentes';
}
if ( strlen($senha) < 4 ){
    $erros[] = 'Senha pequena'
}
if( empty($email) ){
    $erros[] = 'Email não preenchido';
}
if( ){
    # verificar se o email já existe em outra conta
}
if( empty($nascimento) ){
    $erros[] = 'Data de nascimento não selecionada'
}
if(){
    # data de nascimento antiga ou nova demais
}

#salvar o cadastro


?>