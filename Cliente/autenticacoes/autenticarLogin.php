<?php
    //inciiando a sessão
    session_start();
    //incluindo o banco de dados
    include("./../../Banco_de_dados/conexao.php");
    //variáveis
    $email = $_POST['usuario'];
    $senha = $_POST['senha'];
    //variável de sessão
    $_SESSION['eemail'] = $_POST['usuario'];
    //consulta no banco de dados
    $consulta = mysqli_query($conexao,"SELECT emailCliente, senhaCliente FROM cliente WHERE emailCliente = '$email' and senhaCliente = '$senha'");
    //verifica se existe no banco de dados
    if(mysqli_num_rows($consulta) == 1)
    {
        //caso exista, ele avança para a página principal
        header("Location: ./../../../../toquenarede/Cliente/homeCliente.php"); 
    }
    else 
    {
        //caso não exista, ele continua na página de login
        header("Location: ./../../../../toquenarede/Cliente/LoginPage.php");
    }
    
    
?>