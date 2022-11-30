<?php
    session_start();
    include("./../Banco_de_dados/conexao.php");

    $retorno = '{  "erro": true  }';

    try {
        $email = $_GET['email'];
        $consultaEmail = mysqli_query($conexao, "SELECT * FROM empresa WHERE emailEmpresa = '$email'");
        if(mysqli_num_rows($consultaEmail)==1)
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