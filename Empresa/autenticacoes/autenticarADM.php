<?php
    //iniciei uma sessão
    session_start();
    //inclui o banco de dados
    include("./../../Banco_de_dados/conexao.php");

    //variáveis
    $nome = $_POST['nome'];
    $emaill = $_POST['email'];
    $senha = md5($_POST['senha']);

    //consulta no banco de dados
    $email = mysqli_query($conexao,"SELECT emailAdm FROM adm WHERE emailAdm = '$emaill'");
    //se existe no banco de dados
    if(mysqli_num_rows($email)==1)
    {
        //ele dá erro, e não avança
        header("Location: ./../../../../toquenarede/Empresa/TelaAdicionarADM.php");
    }
    else
    {
        //senão, se não existe. ele insere os dados e avança.
        mysqli_query($conexao, "INSERT INTO adm (nomeAdm, emailAdm, senhaAdm) VALUES ('".$nome."','".$emaill."','".$senha."')");
        header("Location: ./../../../../toquenarede/Empresa/home_empresa.php");
        
    }
    
?>  