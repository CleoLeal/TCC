<?php
    //inicio uma sessão  
    session_start();
    //inclui o banco de dados
    include("./../../Banco_de_dados/conexao.php");
    //variáveis
    $senha = md5($_POST['senha']);
    $confirmar = md5($_POST['confirmar']);
    $conta = $_SESSION['conta'];
    $email = $_SESSION['email'];
    //se as senhas forem iguais
    if($senha == $confirmar)
    {
        //se a conta for igual a Cliente
        if($conta == 'Cliente')
        {
            //a senha é atualizada (insere a nova senha)
            $atualizarCliente = mysqli_query($conexao, "UPDATE cliente SET senhaCliente= '$senha', confirmarCliente='$confirmar' WHERE emailCliente = '$email'");
            //avança para a tela de login
            header("Location: ./../../../../toquenarede/Cliente/LoginPage.php");
        }
        //senão, a conta for igual a Empresa 
        else 
        {
            //a senha é atualizada (insere a nova senha)
            $atualizarEmpresa = mysqli_query($conexao, "UPDATE empresa SET senhaEmpresa= '$senha', confirmarEmpresa='$confirmar' WHERE emailEmpresa = '$email'");
            //avança para a tela de login
            header("Location: ./../../../../toquenarede/Empresa/loginEmpresa.php");
        }
    }
    else
    {
        header("Location: ./../../../../toquenarede/esqueciSenha/RedefenirSenha.php");
    }
?>