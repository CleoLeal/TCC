<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta Empresa 3</title>
    <link rel="stylesheet" href="./css/CriarContaEmpresa3.css">
</head>
    <!-- Adicionando JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
                integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
                crossorigin="anonymous"></script>
            
    <script type="text/javascript" src="passos.js"></script>
    <script type="text/javascript" src="./../js/validandoSenhaEmpresa.js"></script>
<body>
    <div class="img"></div>
    <div class="process">
        <p onclick="passo1()" class="numbers">1</p>
        <hr>
        <p onclick="passo2()"class="numbers">2</p>
        <hr>
        <p class="numbers  active">3</p>
    </div>
    <div class="container">
        <img class="logoimg" src="https://i.ibb.co/2FCQKwC/logoTNR.png">
        <form action="./autenticacoes/entrar.php" method="POST">    
            <p class="type"> Senha:</p>
            <div class="containerinput1">
                <input class="input1" type="password" name="senha" id="senha" required>

            </div>
            <p class="type"> Confirmar Senha: </p>
            <div class="containerinput2">
                <input class="input2" type="password" name="confirmar" id="confirmar" required>
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