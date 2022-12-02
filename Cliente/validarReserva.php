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
        $data =$_GET['data'];
        $hora = $_GET['hora'];
        //consulta no banco de dados
        $consulta = mysqli_query($conexao, "SELECT dataReserva AND horaReserva FROM reserva WHERE dataReserva = '$data' AND horaReserva = '$hora'");
        //se é existente no banco de dados
        if(mysqli_num_rows($consulta) == 1)
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