<?php
    //se o botão criarConta for clicado
    if(ISSET($_POST['criarConta']))
    {
        //ele avança
        header("Location: ./../../../../toquenarede/Empresa/criarContaEmpresa1.php");
    }
    //se o botão reserva for clicado
    else if(ISSET($_POST['reserva']))
    {
        //ele avança
        header("Location: ./../../../../toquenarede/Empresa/ReservasFeitas.php");
    }
?>