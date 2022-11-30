<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page </title>
    <link rel="stylesheet" href="./css/LoginPage.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
</head>
<script src="./passos.js"></script> 
    <script src="./../js/validandoLoginCliente.js"></script>  
<body>
    <div class="img"></div>
    <div class="container">
        <img class="logoimg" src="https://i.ibb.co/2FCQKwC/logoTNR.png">
        <p>
            A diversão da praia no meio da cidade
        </p>

        <div>
        <form action="./autenticacoes/autenticarLogin.php" method="POST">
            <p class="type"> Usúario: </p>
            <div class="containerinput">
                <label class="label" for="senha">
                    <img class="labelimg" src="https://cdn-icons-png.flaticon.com/512/456/456212.png">
                </label>
                
                <input class="input" type="text" name="usuario"  id="usuario" required> 
            </div>
            <div> 
                <p class="type"> Senha: </p>
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
            <form action="./autenticacoes/botoes.php" method="POST">
                <div class="containerbtn">
                <button name="criarConta"class="btn1">
                    Criar uma conta
                </button>
                </div>
                <div class="containerbtn">
                    <button name="entrarEmpresa"class="btn2">
                        Entrar como Empresa
                    </button>
                </div>
            </form>
        
    </div>
</body>
</html>