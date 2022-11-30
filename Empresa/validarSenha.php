<?php
    session_start();
    include("./../Banco_de_dados/conexao.php");

    $retorno = '{  "erro": true  }';

    try {
        $senha = md5($_GET['senha']);
        $confirmar = md5($_GET['confirmar']);
        if($senha==$confirmar)
        {
            $retorno = '{  "existente": true  }';

        }
        else
        {
            $retorno = '{  "existente": false  }';
        }
    }
    catch (Exception $e) {
        $retorno = '{  "erro": true  }';
    }
    finally {
        echo $retorno;
    }

?>