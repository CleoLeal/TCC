<?php
    session_start();
    include("./../../Banco_de_dados/conexao.php");
    $_SESSION['razaoSocial'] = $_POST['razaoSocial'];
    $_SESSION['fantasia'] = $_POST['fantasia'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['telefone'] = $_POST['telefone'];

    $email = $_POST['email'];
    $consultaEmail = mysqli_query($conexao, "SELECT * FROM empresa WHERE emailEmpresa = '$email'");
    if(mysqli_num_rows($consultaEmail)==1)
    {

        header("Location:./../../../../toquenarede/Empresa/criarContaEmpresa1.php");

    }
    else
    {
        header("Location: ./../../../../toquenarede/Empresa/criarContaEmpresa2.php");
    }
?>