<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Login</title>
        </head>
        <link rel="stylesheet" type="text/css" href="./css/LoginEmpresa.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
            <script type="text/javascript" src="./passos.js"></script>
            <script type="text/javascript" src="./../js/validandoLoginEmpresa.js"></script>
        <body>
            <div class="img"> </div>
            <div class="container">
            <img class="logoimg" src="https://i.ibb.co/2FCQKwC/logoTNR.png">
            <p>
                Traga a praia para a cidade
            </p>

            <form action="./autenticacoes/autenticacoes.php" method="POST">
            <div> 
            <p class="type"> Usúario</p>
                <div class="containerinput">
            <label class="label" for="senha">
                <img class="labelimg" src="https://cdn-icons-png.flaticon.com/512/8175/8175264.png">
            </label>
            
            <input class="input" type="text" name="email" id="email" required> 
        </div>
        <div> 
            <p class="type"> Senha </p>
                <div class="containerinput2">
                 <label class="label2" for="novaSenha">
                     <img class="label2img" src="https://cdn-icons-png.flaticon.com/512/45/45259.png">
                  </label>
                <input class="input2" type="password" name="senha" id="senha" required>
            </div>
        </div>
    
        <a href="./../../toquenarede/esqueciSenha/tipodeConta.php" class="text"> Esqueci minha senha </a> 
        
        <div class="containerbtn">
        <button class="btn">
            Entrar
        </button>
        
        </div>
        </form>
        <form action="./autenticacoes/botao.php" method="POST">
            <div class="containerbtn">
            <button name="criarConta" class="btn1">
                Criar uma conta
            </button>
            </div>
        </form>
               
            </div>
            
        </body>
    </html>