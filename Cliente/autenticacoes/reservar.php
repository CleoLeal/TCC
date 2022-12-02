<?php
    //iniciei a sessão
    session_start();
    //inclui o banco de dados
    include("./../../Banco_de_dados/conexao.php");

    //guardei os dados nas variáveis
    $dia = $_POST['data'];
    $hora = $_POST['hora'];
    //consultei no banco de dados 
    $consulta = mysqli_query($conexao,"SELECT dataReserva AND horaReserva FROM reserva WHERE dataReserva = '$dia' AND horaReserva = '$hora'");
    //se existe no banco de dados, a reserva não é feita e ele não avança
    if(mysqli_num_rows($consulta) == 1)
    {
        header("Location: ./../../../../toquenarede/Cliente/Reserva.php");
    }
    else 
    {
        //se não existe no banco de dados, a reserva é feita e ele avança de página
        mysqli_query($conexao, "INSERT INTO reserva (dataReserva, horaReserva) VALUES ('".$dia."','".$hora."')");
        header("Location: ./../../../../toquenarede/Cliente/homeCliente.php");
    }
    
?>