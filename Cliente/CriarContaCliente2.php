<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta Empresa</title>
    <link rel="stylesheet" href="./css/CriarContaCliente2.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
</head>
    <script src="passos.js"></script>
    <script src="../js/validandoSenhaCliente.js"></script>           
<body>
    <div class="img"></div>
    <div class="process">
        <p onclick="passo1()" class="numbers">1</p>
        <hr>
        <p class="numbers active">2</p>

    </div>
    <div class="container">
        <img class="logoimg" src="https://i.ibb.co/2FCQKwC/logoTNR.png">
        <form action="./autenticacoes/entrar.php" method="POST">
            <p class="type">Data de Nascimento:</p>
            <div class="containerinput">
                
                <input class="input" type="date" name="data" id="data" >

            </div>
            <p class="type">Senha:</p>
            <div class="containerinput1">
                <input class="input1" type="password"  name="senha" id="senha">

            </div>
            <p class="type">Confirmar Senha:</p>
            <div class="containerinput2">
                <input class="input2" type="password" name="confirmar" id="confirmar">

            </div>

            <div class="containerbtn">
            <button class="btn">
                Criar Conta
            </button>
            </div>
        </form>
    </div>
</body>
</html>