<?php
    session_start();
    include("./../../Banco_de_dados/conexao.php");

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $consulta = mysqli_query($conexao,"SELECT emailEmpresa, senhaEmpresa FROM empresa WHERE emailEmpresa = '$email' and senhaEmpresa = '$senha'");
    $consultaAdm = mysqli_query($conexao, "SELECT emailAdm, senhaAdm FROM adm WHERE emailAdm = '$email'  AND senhaAdm = '$senha'");
    
    if((mysqli_num_rows($consulta)==1) || (mysqli_num_rows($consultaAdm)==1))
    {
        header("Location: ./../../../../toquenarede/Empresa/loginEmpresa.php");
    }
    else 
    {
        header("Location: ./../../../../toquenarede/Empresa/home_empresa.php");
    }
?>