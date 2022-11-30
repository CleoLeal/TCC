<?php
    session_start();
    include("./../Banco_de_dados/conexao.php");

    $retorno = '{  "erro": true  }';

    try {
        $data =$_GET['data'];
        $data = substr($data,6,4)."-".substr($data,3,2)."-".substr($data,0,2);
        $hora = $_GET['hora'];

        $consulta = mysqli_query($conexao, "SELECT * FROM reserva WHERE dataReserva = '$data' AND horaReserva = '$hora'");
        if(mysqli_num_rows($consulta) == 1)
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