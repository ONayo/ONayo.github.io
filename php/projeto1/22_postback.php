```php
<?php 

session_start();
include_once('17_connection.php');

// Receber os dados do formulário
$titulo = $_POST['titulo'] ?? '';
$texto = $_POST['texto'] ?? '';
$autor = $_SESSION['id'] ?? null;

// Configurar data e horário
date_default_timezone_set('America/Sao_Paulo');
$data = date("n/d/Y H:i");

// Array de erros
$erros = [];

// Verificar título
if (empty($titulo)) {
    $erros[] = 'Title box is empty <br>';
}

if (strlen($titulo) > 50) {
    $erros[] = 'Title is larger than acceptable <br>';
}

// Verificar texto
if (strlen($texto) > 175) {
    $erros[] = 'Text is larger than acceptable <br>';
}

if (empty($texto)) {
    $erros[] = 'Text box is empty <br>';
}

// Verificar autor
if (empty($autor)) {
    $erros[] = 'Author not identified <br>';
}

// Se não houver erros
if (empty($erros)) {

    $sql = "INSERT INTO posts (title, text, autor, date)
            VALUES (?, ?, ?, ?)";

    $stmt = $conexao->prepare($sql);

    if ($stmt) {

        $stmt->bind_param("ssis", $titulo, $texto, $autor, $data);

        if ($stmt->execute()) {

            unset($_SESSION['old']);

            $stmt->close();

            header('Location: 23_forum.php');
            exit();

        } else {

            $erros[] = 'Error publishing post <br>';
            $stmt->close();

        }

    } else {

        $erros[] = 'Error preparing SQL query <br>';

    }
}

// Se houver erros, retornar ao formulário
$_SESSION['erros'] = $erros;

header('Location: 21_postmaker.php');
exit();

?>
```