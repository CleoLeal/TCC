<?php
    session_start();
    include("./validacaoCnpj.php");
    
    $CNPJ = new CNPJ();

    $retorno = '{  "erro": true  }';

    try {
        $cnpj = $_GET['cnpj'];
        if(($CNPJ -> verificaCNPJ($cnpj)) != true)
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