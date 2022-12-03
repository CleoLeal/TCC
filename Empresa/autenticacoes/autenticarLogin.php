<?php
    //inicio uma sessão
    session_start();
    //inclui o banco de dados
    include("./../../Banco_de_dados/conexao.php");

    //variáveis
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
    //consulta na tabela Empresa
    $consulta = mysqli_query($conexao,"SELECT emailEmpresa, senhaEmpresa FROM empresa WHERE emailEmpresa = '$email' and senhaEmpresa = '$senha'");
    //consulta na tabela Adm
    $consultaAdm = mysqli_query($conexao, "SELECT emailAdm, senhaAdm FROM adm WHERE emailAdm = '$email'  AND senhaAdm = '$senha'");
    //se existir na tabela empresa OU se existir na tabela Adm
    if(mysqli_num_rows($consulta) == 1 ||mysqli_num_rows($consultaAdm) == 1 )
    {
        //ele avança
        header("Location: ./../../../../toquenarede/Empresa/home_empresa.php");
    }
    else 
    {
        //ele não avança
        header("Location: ./../../../../toquenarede/Empresa/loginEmpresa.php");
    }
?>