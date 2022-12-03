<?php

    //inicio uma sessão
    session_start();
    //inclui o banco dedados
    include("./../Banco_de_dados/conexao.php");

    //chamei a classe
    $CNPJ = new CNPJ();

    //crio uma variável de retorno
    $retorno = '{  "erro": true  }';
    

    //crio um bloco
    try {
        //variável em get
        $cnpj = $_GET['cnpj'];
        //se o cnph for diferente de true 
        if(($CNPJ -> verificaCNPJ($cnpj)) != true)
        {
            //ele retorna true
            $retorno = '{  "existente": true  }';

        }
        else
        {
            //senão ele retorna false
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