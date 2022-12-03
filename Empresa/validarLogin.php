<?php
    //inicio uma sessão
    session_start();
    //inclui o banco dedados
    include("./../Banco_de_dados/conexao.php");

    //crio uma variável de retorno
    $retorno = '{  "erro": true  }';

    //crio um bloco
    try {
        //variáveis em get
        $email = $_GET['email'];
        $senha = md5($_GET['senha']);
        //consulta na tabela Empresa
        $consultaEmail = mysqli_query($conexao, "SELECT emailEmpresa, senhaEmpresa FROM empresa WHERE emailEmpresa= '$email' AND senhaEmpresa = '$senha'");
        //consulta na tabela Adm
        $consultaAdm = mysqli_query($conexao, "SELECT emailAdm, senhaAdm FROM adm WHERE emailAdm = '$email'  AND senhaAdm = '$senha'");
        //se existir na tabela empresa OU se existir na tabela Adm
        if(mysqli_num_rows($consultaEmail)==1 || mysqli_num_rows($consultaAdm)==1  )
        {
            //o existente é true
            $retorno = '{  "existente": true  }';

        }
        else
        {
            //o existente é false
            $retorno = '{  "existente": false  }';
        }
    }
    //ele captura a variável retorno
    catch (Exception $e) {
        $retorno = '{  "erro": true  }';
    }
    finally {
        echo $retorno;
    }

?>