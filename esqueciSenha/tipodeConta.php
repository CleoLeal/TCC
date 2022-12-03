<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tipo de Conta</title>
    <link rel="stylesheet" href="./css/tipodeConta.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
</head>
<body>
    <script type="text/javascript" src="./../js/validandoEmailES.js"></script>
    <dib class="img"></dib>
    <div class="container">
        <img class="logoimg" src="https://i.ibb.co/2FCQKwC/logoTNR.png">
        <div>
            <p>
                Qual o seu tipo de conta?
            </p>
        </div>
        <p class="type">  Tipo de conta: </p>
        <div class="containerinput">
            <label class="label" for="email">
                <img class="labelimg" src="https://cdn.animaapp.com/projects/6335eee71f9ca8e2d224bbe4/releases/633cd4e3dc26526795bd7232/img/user-1@2x.png">
            </label>
        <form action="./autenticacoes/conta.php" method="POST">
              <select class="input" name="conta" id="conta">
                <option name="selecione" disabled selected> Selecione</option>
                <option name="cliente"> Cliente </option>
                <option name="empresa"> Empresa </option>
              </select>
        
        </div>
            <div class="containerbtn">
            <button class="btn">
                Redefenir
            </button>
        </form>
        </div>
    </div>
</body>
</html>