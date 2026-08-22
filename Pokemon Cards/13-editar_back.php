
    
    <?php

        // CONECÇÃO COM O BANCO MYSQL
    
        $host = 'localhost';
        $usuario = 'root';
        $senha = '';
        $banco = 'simyes';

        include_once('14-connect.php');

        // PEGAR INFORMAÇÕES

        $valor = @$_POST['id'];
        $nome = @$_POST['nome'];
        $idade = @$_POST['idade'];
        $cargo = @$_POST['cargo'];

        $sql = "UPDATE workers SET nome = '$nome', idade = '$idade', cargo = '$cargo' WHERE ID = '$valor' ";
        $resultado = $conexao->query($sql);

            // REDIRECIONAR PARA OUTRA PÁGINA
        header('Location: 10-workers.php');

        ?>
