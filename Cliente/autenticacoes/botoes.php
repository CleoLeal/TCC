<?php
    //se o botão entrarEmpresa for clicado, ele avança 
    if(ISSET($_POST['entrarEmpresa']))
    {
        header("Location: ./../../../../toquenarede/Empresa/loginEmpresa.php");
        
    }
    //se o botão entrarEmpresa for clicado, ele avança
    else if(ISSET($_POST['criarConta']))
    {
        header("Location: ./../../../../toquenarede/Cliente/CriarContaCliente1.php");
    }
    //se o botão entrarEmpresa for clicado, ele avança
    else if(ISSET($_POST['agendar']))
    {
        header("Location: ./../../../toquenarede/Cliente/Reserva.php");
    }
?>