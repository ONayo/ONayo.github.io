
    
    <?php
        session_start();

        // CONECÇÃO COM O BANCO MYSQL
    
        $host = 'localhost';
        $usuario = 'root';
        $senha = '';
        $banco = 'simyes';

        $conexao = new mysqli($host, $usuario, $senha, $banco); 

        // COLETAR INFORMAÇÕES

        $nome = @$_POST['nome'];
        $idade = @$_POST['idade'];
        $cargo = @$_POST['cargo'];

        // VALIDAR INFORMAÇÕES

        $erros = [];

        if($idade < 14){
            $erros[] = 'Idade baixa. Mínimo 14 <br>';
        }
        if(empty($nome)){
            $erros[] = 'Aba de nome não preenchida <br>';
        }
        if(empty($cargo)){
            $erros[] = 'Aba de cargo não preenchida <br>';
            echo($cargo);
        }
        
        if(count($erros) > 0){
            // FORMULÁRIO INVÁLIDO
            $_SESSION['erros'] = $erros;
            header('Location: 8-front.php');
        }else{
            // ADICIONAR NO BANCO

        $sql = "INSERT INTO workers (nome, idade, cargo) VALUES ('$nome', '$idade', '$cargo')";
        $resultado = $conexao->query($sql);

        // REDIRECIONAR PARA OUTRA PÁGINA

        header('Location: 10-workers.php');
        }

        

        ?>
