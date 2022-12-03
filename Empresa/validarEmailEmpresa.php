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
        //consulta no banco de dados
        $consultaEmail = mysqli_query($conexao, "SELECT * FROM empresa WHERE emailEmpresa = '$email'");
        //se a consulta existir
        if(mysqli_num_rows($consultaEmail)==1)
        {
            //o existente true
            $retorno = '{  "existente": true  }';

        }
        else
        {
            //senão o existente é false
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