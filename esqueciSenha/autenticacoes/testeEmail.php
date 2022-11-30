<?php
    session_start();
    include("./../../Banco_de_dados/conexao.php");
    $conta = $_SESSION['conta'];
    $email = $_POST['email'];
    $_SESSION['email'] = $_POST['email'];
    if($conta == 'Cliente')
    {
        $consultaCliente = mysqli_query($conexao, "SELECT emailCliente FROM cliente where emailCliente = '$email'");
        if(mysqli_num_rows($consultaCliente)==1)
        {
            header("Location: ./../../../../toquenarede/esqueciSenha/CodigoSenha.html");
        }
        else
        {
            header("Location: ./../../../../toquenarede/esqueciSenha/EsqueciSenha.php");
        }
        
    }
    else if($conta == 'Empresa')
    {
        $consultaEmpresa = mysqli_query($conexao, "SELECT emailEmpresa FROM empresa where emailEmpresa = '$email'");
        if(mysqli_num_rows($consultaEmpresa)==1)
        {
            header("Location: ./../../../../toquenarede/esqueciSenha/CodigoSenha.html");
        }
        else
        {
            header("Location: ./../../../../toquenarede/esqueciSenha/EsqueciSenha.php");
        }
    }
    
    else
    {
        header("Location: ./../../../../toquenarede/esqueciSenha/EsqueciSenha.php");
    }
?>  