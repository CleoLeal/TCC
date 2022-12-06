<?php
    //iniciei uma sessão
    session_start();
    //inclui o banco de dados
    include("./../../Banco_de_dados/conexao.php");
    //variável
    $codigo = $_POST['codigo'];
    //se o código informado for esse
    if($codigo == '123456')
    {
        //ele avança
        header("Location: ./../../../../toquenarede/esqueciSenha/RedefenirSenha.php");
    }
    else 
    {
        //senão, não avança
        header("Location: ./../../../../toquenarede/esqueciSenha/CodigoSenha.php");
    }
?>  