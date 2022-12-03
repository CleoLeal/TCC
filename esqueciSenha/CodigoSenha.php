<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Código Senha</title>
        <link rel="stylesheet" type="text/css" href=".//CodigoSenha.php">
        <link rel="stylesheet" type="text/css" href="./css/CodigoSenha.css">
</head>
<body>
    <div class="img"></div>
    <div class="container">
        <img class="logoimg" src="https://i.ibb.co/2FCQKwC/logoTNR.png">
        <form action="./autenticacoes/codigo.php" method="POST">
            <div class="insira-o-codigo">
                <p>
                    Insira o código que foi enviado ao seu e-mail
                </p>
            </div>
            <p class="type"> Insira o código: </p>
            <div class="containerinput">
                <label class="label" for="codigo">
                    <img class="labelimg" src="https://cdn-icons-png.flaticon.com/512/45/45259.png">
                </label>
                <input class="input" type="password"  id="codigo" name="codigo" required>
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
    
</body>
</html>