<?php
    //inicidei uma sessão
    session_start();
    //inclui o banco de dados
    include("./../../Banco_de_dados/conexao.php");
    //inclui uma classe
    include("./../validacaoCnpj.php");

    //chamei a classe
    $CNPJ = new CNPJ();

    //variáveis ded sessão
    $_SESSION['cnpj'] =  $_POST['cnpj'];
    $_SESSION['inscricaoEstadual'] = $_POST['inscricaoEstadual'];
    $_SESSION['cep'] = $_POST['cep'];
    $_SESSION['numero'] = $_POST['numero'];

    $cnpj = $_POST['cnpj'];
    
    //se o cnph informado for verdadeiro (na classe se for verdade que é errado, ele retorna true)
    if(($CNPJ -> verificaCNPJ($cnpj)) == true)
    {		
        //ele não avança
        header("Location: ./../../../../toquenarede/Empresa/criarContaEmpresa2.php");
    }
    else
    {
        //ele avança
        header("Location: ./../../../../toquenarede/Empresa/criarContaEmpresa3.php");
    }

?>