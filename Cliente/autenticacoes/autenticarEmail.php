<?php
    //iniciando uma sessão
    session_start();
    //inclui o banco de dados
    include("./../../Banco_de_dados/conexao.php");
    //colocando os dados em uma varável de sessão
    $_SESSION['nome'] = $_POST['nome'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['telefone'] = $_POST['telefone'];
    $_SESSION['cep'] = $_POST['cep'];

    $email = $_POST['email'];
    //consultando no banco de dados
    $consultaEmail = mysqli_query($conexao, "SELECT * FROM cliente WHERE emailCliente = '$email'");
    //verificando se existe no banco de dados
    if(mysqli_num_rows($consultaEmail)==1)
    {
        //caso exista, continua na mesma página e informa o erro
        header("Location: ./../../../../toquenarede/Cliente/CriarContaCliente1.php");

    }
    else
    {
        //caso não exista, ele avança para a próxima página
        header("Location:./../../../../toquenarede/Cliente/CriarContaCliente2.php");
    }
?>