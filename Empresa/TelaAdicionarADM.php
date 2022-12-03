<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Adicionar ADM</title>
         <link rel="stylesheet" type="text/css" href="./css/TelaAdicionarADM.css" >
         <script src="https://code.jquery.com/jquery-3.6.0.min.js"
                integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
                crossorigin="anonymous"></script>
</head>
    <body>
    <script src="./../js/validandoEmailAdm.js"></script>
        <nav>
            <div class="pesquisar-container">
                <img src="https://cdn-icons-png.flaticon.com/512/3772/3772344.png" alt="" class="imgPesq">
                  <input type="text" placeholder="Pesquisar" class="inputPesq">
            </div>
            <div class="container-links">
            <div class="text">Olá, Seja bem vindo!</div>
                <a href="./loginEmpresa.php"><img src="https://cdn-icons-png.flaticon.com/512/8175/8175264.png" alt="" class="imgPerson"></a>
            </div>
        </nav>
        
        
        <div class="container">
            <div class="itens">
                <a href="./../../toquenarede/Empresa/TelaArenaPraia.php" class="linkitens">Meu Perfil</a>
            </div>
            <div class="itens">
                <a href="./../../toquenarede/quemSomos/quemSomosEmpresa.php" class="linkitens">Quem Somos</a>
            </div>
            <div class="itens">
                <a href="" class="linkitens">Adicionar ADM</a>
            </div>
            <div class="itens">
                <a href="./../../toquenarede/Empresa/home_empresa.php" class="linkitens">Minhas Arenas</a>
            </div>
            <div class="itens">
                <a href="./../../toquenarede/emConstrucao.php" class="linkitens">Configuração</a>
            </div>
        </div>

        <body>
          <div class="body.login"> </div>
          <div class="container2">
            <form action="./autenticacoes/autenticarADM.php" method="POST">
                <div> 
                <p class="type">Nome</p>
                <div class="containerinput">
                    <label class="label" for="senha">
                        <img src="https://cdn-icons-png.flaticon.com/512/456/456212.png" alt="" class="imgPerson">
                    </label>
                    
                    <input type="text" class="input" id="nome" name="nome"> 
                </div>
                <div> 
                    <p class="type">Email Empresa</p>
                    <div class="containerinput">
                        <label class="label" for="senha">
                            <img src="https://cdn-icons-png.flaticon.com/512/456/456212.png" alt="" class="imgPerson" >
                        </label>
                        <input class="input" type="email"  id="email" name="email"> 
                    </div> 
                    <div> 
                        <p class="type"> Senha </p>
                            <div class="containerinput2">
                            <label class="label2" for="novaSenha" >
                                <img class="label2img" src="https://cdn-icons-png.flaticon.com/512/45/45259.png">
                            </label>
                            <input class="input2" type="password"  id="senha" name="senha">
                        </div>
                    </div>  
                <div class="containerbtn">
                <button class="btn">
                    Criar Conta
                </button> 
                </div>
                </div>
                </form>
          </div>
      </body>
</html>