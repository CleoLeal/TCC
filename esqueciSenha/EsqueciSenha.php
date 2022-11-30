<?php
    session_start();

    $conta = $_SESSION['conta'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Esqueci Senha</title>
       <link rel="stylesheet" type="text/css" href="./css/EsqueciSenha.css">
       <!-- Adicionando JQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
</head>
<body>
    <script type="text/javascript" src="./../js/validandoEmailES.js"></script>
    
    <div class="img"></div>
    <div class="container">
        <img class="logoimg" src="https://i.ibb.co/2FCQKwC/logoTNR.png">
        <div>
            <p>
                Enviaremos para seu E-mail um código de validação. <br> Para isso, informe abaixo:
            </p>
        </div>
        <form action="./autenticacoes/testeEmail.php" method="POST">
    
        <div class="containerinput">
            <label class="label" for="email">
                <img class="labelimg" src="https://cdn.animaapp.com/projects/6335eee71f9ca8e2d224bbe4/releases/633cd4e3dc26526795bd7232/img/user-1@2x.png">
            </label>
            
            <input class="input" type="email"  id="email"  name="email" placeholder="Digite seu melhor E-mail">

        </div>
        <div class="containerbtn">
        <button class="btn">
            Enviar E-mail
        </button>
        </div>'
        <input type="hidden" id="conta" value="<?=$conta?>">
        </form>

    </div>
    
</body>
</html>