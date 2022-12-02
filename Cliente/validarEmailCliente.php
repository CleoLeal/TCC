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
        //consulto no banco de dados
        $consultaEmail = mysqli_query($conexao, "SELECT * FROM cliente WHERE emailCliente = '$email'");
        //caso exista
        if(mysqli_num_rows($consultaEmail)==1)
        {
            //o existente é true
            $retorno = '{  "existente": true  }';

        }
        else
        {
            //senão é falso
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