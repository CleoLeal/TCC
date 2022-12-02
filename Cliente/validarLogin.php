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
        $email = $_GET['email'];
        $senha = md5($_GET['senha']);
        //consulta no banco de dados
        $consulta = mysqli_query($conexao, "SELECT emailCliente AND senhaCliente FROM cliente where emailCliente = '$email' AND senhaCliente ='$senha'");
        //se existe uma consulta
        if(mysqli_num_rows($consulta)==1)
        {
            //é verdade que é existenta
            $retorno = '{  "existente": true  }';

        }
        else
        {
            //senão, é falso que é existente
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