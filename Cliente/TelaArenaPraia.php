<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Tela da Arena </title>
         <link rel="stylesheet" type="text/css" href="./css/TelaArenaPraia.css" >
</head>
    <body>
        <nav>
            <div class="pesquisar-container">
                <img src="https://cdn-icons-png.flaticon.com/512/3772/3772344.png" alt="" class="imgPesq">
                  <input type="text" placeholder="Pesquisar" class="inputPesq">
            </div>
            <div class="container-links">
                <p class="link" id="linkEntrar">Olá, Seja bem vindo!</p>
                <a href="./../../toquenarede/Cliente/LoginPage.php"><img src="https://cdn-icons-png.flaticon.com/512/456/456212.png" alt="" class="imgPerson"></a>
            </div>
        </nav>
        <div class="container">
            <div class="itens">
                <a href="./../../toquenarede/Cliente/homeCliente.php" class="linkitens">Home</a>
            </div>
            <div class="itens">
                <a href="./../../toquenarede/quemSomos/quemSomosCliente.php" class="linkitens">Quem Somos</a>
            </div>
            <div class="itens">
                <a href="./../../toquenarede/Cliente/arenasCliente.php" class="linkitens">Arenas</a>
            </div>
            <div class="itens">
                <a href="./../../toquenarede/Cliente/Telalocalizacao1.php" class="linkitens">Localização</a>
            </div>
            <div class="itens">
                <a href="./../../toquenarede/emConstrucao.php" class="linkitens">Configuração</a>
            </div>
        </div>
        <div >
            <h2 class="type"> Prainha Sports </h2>
        </div>
            <p class="endereco">  Av. Cap. José Parada Gonçalves <br>
                nº40 CEP:02418-140</p>
                <p class="horarios">
                    Seg. 07:00h até as 22:00h <br>
                    Ter. 07:00h até as 22:00h <br>
                    Qua. 07:00h até as 22:00h <br>
                    Qui. 07:00h até as 22:00h <br>
                    Sex.07:00h até as 22:00h <br>
                    Sab. 07:00h até as 17:00h <br>
                    Dom. 08:00h até as 20:00h
         </p>
         <form action="./autenticacoes/botoes.php" method="POST">
            <div class="containerbtn">
                <button class="btn" name="agendar">
                Agende seu horário
                </button> 
                </div>
            
            </div>
            </form>
        </div>
</html>