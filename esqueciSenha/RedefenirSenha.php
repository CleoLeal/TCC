<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Redefenir Senha</title>
    <link rel="stylesheet" href="./css/RedefenirSenha.css">
    <link rel="stylesheet" href="./RedefenirSenha.php">

</head>
<body>
    <div class="img"></div>
    <div class="container">
        <img class="logoimg" src="https://i.ibb.co/2FCQKwC/logoTNR.png">
        <form action="./autenticacoes/senha.php" method="POST">
            <div>
            </div>
            <p class="type"> Nova Senha:</p>
            <div class="containerinput">
                <label class="label" for="senha">
                    <img class="labelimg" src="https://cdn-icons-png.flaticon.com/512/45/45259.png">
                </label>
                <input class="input" type="password"  id="novaSenha" name="senha" required> 

            </div>
            <p class="type"> Confirmar Senha:</p>
                <div class="containerinput2">
                    <label class="label2" for="novaSenha">
                        <img class="label2img" src="https://cdn-icons-png.flaticon.com/512/45/45259.png">
                    </label>
                    <input class="input2" type="password"  id="confirmarSenha" name="confirmar" required>
                </div>
            <div class="containerbtn">
            <button class="btn">
                Redefenir
            </button>
            </div>
        </form>

    </div>
</body>
</html>