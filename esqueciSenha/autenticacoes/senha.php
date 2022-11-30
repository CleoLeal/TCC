<?php
    session_start();
    include("./../../Banco_de_dados/conexao.php");
    $senha = md5($_POST['senha']);
    $confirmar = md5($_POST['confirmar']);
    $conta = $_SESSION['conta'];
    $email = $_SESSION['email'];
    if($senha == $confirmar)
    {
        if($conta == 'Cliente')
        {
            $atualizarCliente = mysqli_query($conexao, "UPDATE cliente SET senhaCliente= '$senha', confirmarCliente='$confirmar' WHERE emailCliente = '$email'");
            header("Location: ./../../../../toquenarede/Cliente/LoginPage.html");
        }
        else 
        {
            $atualizarEmpresa = mysqli_query($conexao, "UPDATE empresa SET senhaEmpresa= '$senha', confirmarEmpresa='$confirmar' WHERE emailEmpresa = '$email'");
            header("Location: ./../../../../toquenarede/Empresa/loginEmpresa.html");
        }
    }
    else
    {
        header("Location: ./../../../../toquenarede/esqueciSenha/RedefenirSenha.html");
    }
?>