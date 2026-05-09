
    
    <?php

        // CONECÇÃO COM O BANCO MYSQL
    
        $host = 'localhost';
        $usuario = 'root';
        $senha = '';
        $banco = 'simyes';

        $conexao = new mysqli($host, $usuario, $senha, $banco); 

        // ADICIONAR FUNCIONÁRIO

        $nome = @$_POST['nome'];
        $idade = @$_POST['idade'];
        $cargo = @$_POST['cargo'];

        $sql = "INSERT INTO workers (nome, idade, cargo) VALUES ('$nome', '$idade', '$cargo')";
        $resultado = $conexao->query($sql);

            // REDIRECIONAR PARA OUTRA PÁGINA
        header('Location: 10-workers.php');

        ?>
