<?php 

session_start();
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'naono';

$conexao = new mysqli($host, $usuario, $senha, $banco);

# pegar informações do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$nascimento = $_POST['nascimento'];
$genero = $_POST['genero'];
$foto = $_POST['foto'];
$senha = $_POST['senha'];
$confsenha = $_POST['confsenha'];

# persistir informações
$_SESSION['old'] = $_POST;

date_default_timezone_set('America/Sao_Paulo');
$data = new Datetime($nascimento);
$limiteantigo = (new Datetime())->modify('-110 years');
$limitenovo = (new Datetime())->modify('-10 years');
$hoje = new Datetime();

$sql = "SELECT * FROM contas WHERE email = '$email'";
$resultado_email = $conexao->query($sql);

# criptografia
$senhacripto = password_hash($senha,PASSWORD_DEFAULT);

# validar informações
$erros = [];

if( empty($nome) ){
    $erros[] = 'No name <br>';
}
if ( strlen($nome) < 3 ){
    $erros[] = 'Small name <br>';
}
if( empty($foto) ){
    $erros[] = 'No photo <br>';
}
if( empty($senha) ){
    $erros[] = 'No password <br>';
}
if ( $senha != $confsenha ){
    $erros[] = 'Different passwords <br>';
}
if ( strlen($senha) < 4 ){
    $erros[] = 'Small password <br>';
}
if( empty($email) ){
    $erros[] = 'No email <br>';
}
if( $resultado_email->num_rows > 0){
    $erros[] = 'This email have been used before <br>';
}
if( empty($nascimento) ){
    $erros[] = 'No birth date <br>';
}
if( $data > $hoje){
    $erros[] = 'Imaginary date <br>';
}else if( $data > $limitenovo){
    $erros[] = 'Too young <br>';
}
if( $data < $limiteantigo){
    $erros[] = 'Too old <br>';
}

# SALVAR O CADASTRO

if( empty($erros) ){
    $sql = "INSERT INTO contas (nome, email, nascimento, genero, senha)
        VALUES ('$nome', '$email', '$nascimento', '$genero', '$senhacripto')";
    $conexao->query($sql);
    unset($_SESSION['old']);
    header('Location: 18_login.php');
}else{
    $_SESSION['erros'] = $erros;
    header('Location: 15_signup.php');
}


?>