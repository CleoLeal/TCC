<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta Empresa</title>
    <link rel="stylesheet" href="./css/CriarContaCliente1.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
</head>
<body>
    <script src="../js/validandoCliente.js"></script>
    <script src="../js/viacep.js"></script>
    <div class="img"></div>
    <div class="process">
        <p class="numbers active">1</p>
        <hr>
        <p class="numbers">2</p>

    </div>
    <div class="container">
        <img class="logoimg" src="https://i.ibb.co/2FCQKwC/logoTNR.png">
        <form action="./autenticacoes/autenticarEmail.php" method="POST">
            <p class="type">Nome:</p>
            <div class="containerinput">
                
                <input class="input" type="text"  name="nome" id="nome" required >

            </div>
            <p class="type">Email:</p>
            <div class="containerinput1">
                <input class="input1" type="email"  name="email" id="email" placeholder="Ex:suaempresa@gmail.com" required>

            </div>
            <p class="type">Telefone:</p>
            <div class="containerinput2">
                <input class="input2" type="text" name="telefone"  id="telefone" placeholder="Ex:00000-000" required>

            </div>
            <p class="type">CEP:</p>
            <div class="containerinput3">
                <input class="input3" type="text" name="cep" id="cep" placeholder="Ex:00000-000" required>

            </div>

            <div class="containerbtn">
            <button class="btn">
                Prosseguir
            </button>
            </div>
        </form>

    </div>
</body>
</html>