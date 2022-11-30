<?php
    session_start();
    include("./../../Banco_de_dados/conexao.php");
    include("./../validacaoCnpj.php");

    $CNPJ = new CNPJ();

    $_SESSION['cnpj'] =  $_POST['cnpj'];
    $_SESSION['inscricaoEstadual'] = $_POST['inscricaoEstadual'];
    $_SESSION['cep'] = $_POST['cep'];
    $_SESSION['numero'] = $_POST['numero'];

    $cnpj = $_POST['cnpj'];

    
    if(($CNPJ -> verificaCNPJ($cnpj)) == true)
    {		
        header("Location: ./../../../../toquenarede/Empresa/criarContaEmpresa2.php");
    }
    else
    {
        header("Location: ./../../../../toquenarede/Empresa/criarContaEmpresa3.php");
    }

?>