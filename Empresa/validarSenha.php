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
        $senha = md5($_GET['senha']);
        $confirmar = md5($_GET['confirmar']);
        //se a senha for igual ao confirmar
        if($senha==$confirmar)
        {
            //o existente é true
            $retorno = '{  "existente": true  }';

        }
        else
        {
            //senão o existente é false
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