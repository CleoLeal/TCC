<?php
    if(ISSET($_POST['entrarEmpresa']))
    {
        header("Location: ./../../../../toquenarede/Empresa/loginEmpresa.php");
        
    }
    else if(ISSET($_POST['criarConta']))
    {
        header("Location: ./../../../../toquenarede/Cliente/CriarContaCliente1.php");
    }
    else if(ISSET($_POST['agendar']))
    {
        header("Location: ./../../../toquenarede/Cliente/Reserva.php");
    }
?>