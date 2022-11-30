<?php
    session_start();
    include("./../../Banco_de_dados/conexao.php");

    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $bit = "1";
    $dataa = substr($data,6,4)."-".substr($data,3,2)."-".substr($data,0,2);
    $consulta = mysqli_query($conexao, "SELECT * FROM reserva WHERE dataReserva = '$dataa' AND horaReserva = '$hora'");
    if(mysqli_num_rows($consulta) == 1)
    {
        mysqli_query($conexao, "INSERT INTO reserva (dataReserva, horaReserva) VALUES('".$data."','".$hora."')");
        header("Location: ./../../../../toquenarede/Cliente/homeCliente.php");   
    }
    else 
    {
        header("Location: ./../../../../toquenarede/Cliente/Reserva.php");
    }
?>