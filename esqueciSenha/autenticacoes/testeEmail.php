<?php
    //incio a sessão
    session_start();
    //inclui o banco de dados 
    include("./../../Banco_de_dados/conexao.php");
    //variáveis
    $conta = $_SESSION['conta'];
    $email = $_POST['email'];
    $_SESSION['email'] = $_POST['email'];
    //se a conta for igual a Clinte
    if($conta == 'Cliente')
    {
        //ele seleciona a tabela Cliente
        $consultaCliente = mysqli_query($conexao, "SELECT emailCliente FROM cliente where emailCliente = '$email'");
        //e consulta se o email é realmente existente
        if(mysqli_num_rows($consultaCliente)==1)
        {
            //se for existente ele avança
            header("Location: ./../../../../toquenarede/esqueciSenha/CodigoSenha.php");
        }
        else
        {
            //senão existir, ele não avança
            header("Location: ./../../../../toquenarede/esqueciSenha/EsqueciSenha.php");
        }
        
    }
    //senão se, for igual a Empresa
    else if($conta == 'Empresa')
    {
        //ele seleciona a tabela Empresa
        $consultaEmpresa = mysqli_query($conexao, "SELECT emailEmpresa FROM empresa where emailEmpresa = '$email'");
        //e consulta se o email é realmente existente e avança
        if(mysqli_num_rows($consultaEmpresa)==1)
        {
            //se for existente ele avança
            header("Location: ./../../../../toquenarede/esqueciSenha/CodigoSenha.php");
        }
        else
        {
            //senão existir, ele não avança
            header("Location: ./../../../../toquenarede/esqueciSenha/EsqueciSenha.php");
        }
    }
    else
    {
        //senão ele não avança
        header("Location: ./../../../../toquenarede/esqueciSenha/EsqueciSenha.php");
    }
?>  