<?php
    session_start();
    include("./../Banco_de_dados/conexao.php");

    $retorno = '{  "erro": true  }';

    try {
        $email = $_GET['email'];
        $senha = md5($_GET['senha']);

        $consultaEmail = mysqli_query($conexao, "SELECT emailEmpresa, senhaEmpresa FROM empresa WHERE emailEmpresa= '$email' AND senhaEmpresa = '$senha'");
        $consultaAdm = mysqli_query($conexao, "SELECT emailAdm, senhaAdm FROM adm WHERE emailAdm = '$email'  AND senhaAdm = '$senha'");
        if(mysqli_num_rows($consultaEmail)==1 || mysqli_num_rows($consultaAdm)==1  )
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