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
    $erros[] = 'Nome não dito <br>';
}
if ( strlen($nome) < 3 ){
    $erros[] = 'Nome pequeno <br>';
}
if( empty($foto) ){
    $erros[] = 'Foto não enviada <br>';
}
if( empty($senha) ){
    $erros[] = 'Senha não informada <br>';
}
if ( $senha != $confsenha ){
    $erros[] = 'Senhas divergentes <br>';
}
if ( strlen($senha) < 4 ){
    $erros[] = 'Senha pequena <br>';
}
if( empty($email) ){
    $erros[] = 'Email não preenchido <br>';
}
if( $resultado_email->num_rows > 0){
    $erros[] = 'Email já utilizado <br>';
}
if( empty($nascimento) ){
    $erros[] = 'Data de nascimento não selecionada <br>';
}
if( $data > $hoje){
    $erros[] = 'A idade selecionada está no futuro <br>';
}else if( $data > $limitenovo){
    $erros[] = 'A idade selecionada é insuficiente <br>';
}
if( $data < $limiteantigo){
    $erros[] = 'A idade selecionada é muito antiga <br>';
}

# SALVAR O CADASTRO

if( empty($erros) ){
    $sql = "INSERT INTO contas (nome, email, nascimento, genero, senha)
        VALUES ('$nome', '$email', '$nascimento', '$genero', '$senhacripto')";
    $conexao->query($sql);
    header('Location: 15_signup.php');
}else{
    $_SESSION['erros'] = $erros;
    header('Location: 15_signup.php');
}


?>