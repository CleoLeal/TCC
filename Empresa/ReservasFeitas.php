<?php
    session_start();
    include("./../../toquenarede/Banco_de_dados/conexao.php");

    $consulta = mysqli_query($conexao, "SELECT idReserva, dataReserva, horaReserva FROM reserva");  

   
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas Feitas</title>
</head>
<!--Link CSS-->
<link rel="stylesheet" type="text/css" href="./css/ReservasFeitas.css">


<body vlink="white">

    <!--Barra Pesquisa-->
    <nav>
        <div class="pesquisar-container">
            <img src="https://cdn-icons-png.flaticon.com/512/3772/3772344.png" alt="" class="imgPesq">
            <input type="text" placeholder="Pesquisar" class="inputPesq">
        </div>
        <div class="container-links">
            <a href="#" class="link" id="linkEntrar">Olá, Seja bem vindo!</a>
            <img src="https://cdn-icons-png.flaticon.com/512/456/456212.png" alt=""
                class="imgPerson">
        </div>
    </nav>
    
    <!--Barra de Navegação-->
    <div class="container">
        <div class="itens">
            <a href="./../../toquenarede/Empresa/TelaArenaPraia.php" class="linkitens">Meu Perfil</a>
        </div>
        <div class="itens">
            <a href="./../../toquenarede/quemSomos/quemSomosEmpresa.php" class="linkitens">Quem somos</a>
        </div>
        <div class="itens">
            <a href="./TelaAdicionarADM.php" class="linkitens">Adicionar ADM</a>
        </div>
        <div class="itens">
            <a href="./home_empresa.php" class="linkitens">Minhas Arenas</a>
        </div>
        <div class="itens">
            <a href="./../../toquenarede/emConstrucao.php" class="linkitens">Configuração</a>
        </div>
    </div>

    <br>

    <!--Texto Explicativo da função da tela-->
    <h1 class="reservasFt">Reservas feitas</h1>
    <p class="reservasDesc">Consulte essa página para visualizar e gerenciar todas as reservas que foram feitas em suas arenas</p>

    <hr>
    <br>

    <!--Tabela com as reservas-->
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Data Reservada</th>
                <th>Horário Reservado</th>
            </tr>
        </thead>
        <?php 
        while($dado=$consulta->fetch_array())
        {?>
        <tbody align="center">
        <tr>
            <td><?php echo $dado['idReserva'];?></td>
            <td><?php echo $dado['dataReserva'];?></td>
            <td><?php echo $dado['horaReserva'];?></td>
        </tr>
        <?php }?>
        </tbody>
    </table>

</body>
</html>