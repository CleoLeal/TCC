<?php
    session_start();
    include("./../../Banco_de_dados/conexao.php");

    $nome = $_POST['nome'];
    $emaill = $_POST['email'];
    $senha = md5($_POST['senha']);

    $email = mysqli_query($conexao,"SELECT emailAdm FROM adm WHERE emailAdm = '$emaill'");
    if(mysqli_num_rows($email)==1)
    {
        header("Location: ./../../../../toquenarede/Empresa/TelaAdicionarADM.php");
    }
    else
    {
        mysqli_query($conexao, "INSERT INTO adm (nomeAdm, emailAdm, senhaAdm) VALUES ('".$nome."','".$emaill."','".$senha."')");
        header("Location: ./../../../../toquenarede/Empresa/home_empresa.php");
        
    }
    
?>  