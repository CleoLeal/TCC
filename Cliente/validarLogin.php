<?php
    session_start();
    include("./../Banco_de_dados/conexao.php");

    $retorno = '{  "erro": true  }';

    try {
        $email = $_GET['email'];
        $senha = $_GET['senha'];
        $consulta = mysqli_query($conexao, "SELECT emailCliente, senhaCliente FROM cliente where emailCliente = '$email' AND senhaCliente = md5('$senha')");
        if(mysqli_num_rows($consulta)==1)
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