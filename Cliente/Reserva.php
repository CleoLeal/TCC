<!DOCTYPE html>
<html lang="pt-br">

    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
    <link rel="stylesheet" type="text/css" href="./css/reserva.css">

    <!-- Adicionando JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
    </head>
    <body>
        <script src="./../../toquenarede/js/validandoReserva.js"></script>    
        <nav>
            <div class="pesquisar-container">
                <img src="https://cdn-icons-png.flaticon.com/512/3772/3772344.png" alt="" class="imgPesq">
                <input type="text" placeholder="Pesquisar" class="inputPesq">
            </div>
            <div class="container-links">
                <p class="link" id="linkEntrar" >ENTRAR</p>
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
                <a href="" class="linkitens">Configuração</a>
            </div>
        </div>

        <p class="titulo">Prainha Sports</p>
        <br>
        <p class="titulo2">Av. Cap. José Parada Gonçalves<br>
            nº40 CEP:02418-140</p>
            <br>
        <p class="titulo3">Seg. 07:00h até as 22:00h | Ter. 07:00h até as 22:00h | Qua. 07:00h até as 22:00h | Qui. 07:00h até as 22:00h<br>
            Sex.07:00h até as 22:00h | Sab. 07:00h até as 17:00h | Dom. 08:00h até as 20:00h
        </p>
        
        <div class="containerInputs">
            <form action="./autenticacoes/reservar.php" method="POST">
                <div class="containerinput">
                    <input class="input" type="date"  id="data" name="data">
                </div>
                <div class="containerinput">
                    <input class="input" type="time"  id="hora" name="hora">
                </div>
                <div class="containerbtn">
                    <button class="btn">
                        Reservar
                    </button>
                </div>
            </form>
        </div>
    </body>
</html>>