<?php
    session_start();
    include("./../Banco_de_dados/conexao.php");

    $retorno = '{  "erro": true  }';

    try {
        $email = $_GET['email'];
        $conta = $_GET['conta'];
        $consulta = mysqli_query($conexao, "SELECT emailCliente FROM cliente where emailCliente = '$email'");
        $consulta2 = mysqli_query($conexao, "SELECT emailEmpresa FROM empresa where emailEmpresa = '$email'");
        if(($conta == "Cliente" && mysqli_num_rows($consulta) == 1) ||($conta == "Empresa" && mysqli_num_rows($consulta2) == 1) )
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