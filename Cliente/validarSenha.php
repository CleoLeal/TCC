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
        //se as senhas são iguais
        if($senha==$confirmar)
        {
            //é verdade que é existente
            $retorno = '{  "existente": true  }';

        }
        else
        {
            //senão é falso que é existente
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