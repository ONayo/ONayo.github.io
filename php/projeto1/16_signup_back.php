<?php 

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

date_default_timezone_set('America/Sao_Paulo');
$data = new Datetime($nascimento);
$limiteantigo = (new Datetime())->modify('-110 years');
$limitenovo = (new Datetime())->modify('-10 years');
$hoje = new Datetime();

$sql = "SELECT * FROM contas WHERE email = '$email'";
$resultado_email = $conexao->query($sql);

# validar informações
$erros = [];

if( empty($nome) ){
    $erros[] = 'Nome não dito';
}
if ( strlen($nome) < 3 ){
    $erros[] = 'Nome pequeno';
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
    $erros[] = 'Senha pequena';
}
if( empty($email) ){
    $erros[] = 'Email não preenchido';
}
if( $resultado_email->num_rows > 0){
    $erros[] = 'Email já utilizado.';
}
if( empty($nascimento) ){
    $erros[] = 'Data de nascimento não selecionada';
}
if( $data > $hoje){
    $erros[] = 'A idade selecionada está no futuro.';
}else if( $data > $limitenovo){
    $erros[] = 'A idade selecionada é insuficiente.';
}
if( $data < $limiteantigo){
    $erros[] = 'A idade selecionada é muito antiga.';
}

# SALVAR O CADASTRO

if( empty($erros) ){
    $sql = "INSERT INTO contas (nome, email, nascimento, genero, senha)
        VALUES ('$nome', '$email', '$nascimento', '$genero', '$senha')";
    $conexao->query($sql);
    header('Location: 15_signup.php');
}else{
    echo('não vazio');
    var_dump($erros);
}


?>
