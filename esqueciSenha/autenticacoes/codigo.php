<?php
    session_start();
    include("./../../Banco_de_dados/conexao.php");
    $codigo = $_POST['codigo'];
    if($codigo == '123456')
    {
        header("Location: ./../../../../toquenarede/esqueciSenha/RedefenirSenha.html");
    }
    else 
    {
        header("Location: ./../../../../toquenarede/esqueciSenha/CodigoSenha.html");
    }
?>  