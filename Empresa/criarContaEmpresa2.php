<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar conta Empresa</title>
</head>
    <link rel="stylesheet" type="text/css" href="./css/CriarContaEmpresa2.css">

    <!-- Adicionando JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
            
    <script type="text/javascript" src="passos.js"></script>
<body>
    <script src="./../js/validandoCnpj.js"></script>
    <!--Imagem de fundo-->
    <div class="img"> </div>
    <div class="process">
        <p onclick="passo1()" class="numbers ">1</p>
        <hr>
        <p class="numbers active">2</p>
        <hr>
        <p class="numbers">3</p>
    </div>
    <!--box branca-->
    <div class="container">
        <img class="logoimg" src="https://i.ibb.co/2FCQKwC/logoTNR.png">
        <form action="./autenticacoes/autenticarCnpj.php" method="POST">
            <p class="type">CNPJ:</p>
            <div class="containerinput">
                
                <input class="input" type="text" name="cnpj" id="cnpj" placeholder="Somente números" required>

            </div>
        
            <p class="type">CEP:</p>
            <div class="containerinput2">
                <input class="input2" type="text"  name="cep" id="cep" placeholder="Somente números" required>

            </div>
            <p class="type">Nº:</p>
            <div class="containerinput3">
                <input class="input3" type="text" name="numero" id="numero" placeholder="Somente números" required>

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