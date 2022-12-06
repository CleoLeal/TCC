<?php
    //inciiando a sessão
    session_start();
    //incluindo o banco de dados
    include("./../../Banco_de_dados/conexao.php");
    //variáveis
    $email = $_POST['usuario'];
    $senha = md5($_POST['senha']);
    //variável de sessão
    $_SESSION['eemail'] = $_POST['usuario'];
    //consulta no banco de dados
    $consulta = mysqli_query($conexao,"SELECT emailCliente, senhaCliente FROM cliente WHERE emailCliente = '$email' and senhaCliente = '$senha'");
    //verifica se existe no banco de dados
    if(mysqli_num_rows($consulta)==1)
    {
        //ele avança
        header("Location: ./../../../../toquenarede/Empresa/home_empresa.php");
    }
    else
    {
        //ele não avança
        header("Location: ./../../../../toquenarede/Empresa/loginPage.php");
    }
    
    
?>