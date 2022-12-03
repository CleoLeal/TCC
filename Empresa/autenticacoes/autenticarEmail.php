<?php
    //iniciei uma sessão
    session_start();
    //inclui o banco de dados
    include("./../../Banco_de_dados/conexao.php");
    //variáveis de sessão
    $_SESSION['razaoSocial'] = $_POST['razaoSocial'];
    $_SESSION['fantasia'] = $_POST['fantasia'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['telefone'] = $_POST['telefone'];

    $email = $_POST['email'];
    //consulta no banco de dados 
    $consultaEmail = mysqli_query($conexao, "SELECT * FROM empresa WHERE emailEmpresa = '$email'");
    //se existe o email
    if(mysqli_num_rows($consultaEmail)==1)
    {
        //ele não avança
        header("Location:./../../../../toquenarede/Empresa/criarContaEmpresa1.php");

    }
    else
    {
        //senão ele avança
        header("Location: ./../../../../toquenarede/Empresa/criarContaEmpresa2.php");
    }
?>