<?php
    //inicio uma sessão
    session_start();
    //inclui o banco dedados
    include("./../Banco_de_dados/conexao.php");

    //crio uma variável de retorno
    $retorno = '{  "erro": true  }';

    //crio um bloco
    try {
        //variável em get
        $email = $_GET['email'];
        $conta = $_GET['conta'];
        //uma consulta do da tabela Cliente
        $consulta = mysqli_query($conexao, "SELECT emailCliente FROM cliente where emailCliente = '$email'");
        //uma consulta do da tabela Empresa
        $consulta2 = mysqli_query($conexao, "SELECT emailEmpresa FROM empresa where emailEmpresa = '$email'");
        //se a conta escolhida for Cliente e o email informado existir na tabela Cliente|| se a conta escolhida for Empresa e o email informado existir na tabela Empresa
        if(($conta == "Cliente" && mysqli_num_rows($consulta) == 1) ||($conta == "Empresa" && mysqli_num_rows($consulta2) == 1) )
        {
            //é verdade que existe
            $retorno = '{  "existente": true  }';

        }
        //senão existir na tabela que a pessoa informou que "existia" o Email
        else
        {
            //é falso que existe
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