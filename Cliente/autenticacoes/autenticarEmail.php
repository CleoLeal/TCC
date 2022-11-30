<?php
    session_start();
    include("./../../Banco_de_dados/conexao.php");
    $_SESSION['nome'] = $_POST['nome'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['telefone'] = $_POST['telefone'];
    $_SESSION['cep'] = $_POST['cep'];

    $email = $_POST['email'];
    $consultaEmail = mysqli_query($conexao, "SELECT * FROM cliente WHERE emailCliente = '$email'");
    if(mysqli_num_rows($consultaEmail)==1)
    {
        //print("<script>alert('Já existe uma conta com esse Email');
        //window.location='criarContaEmpresa1.php';</script>");
        header("Location: ./../../../../toquenarede/Cliente/CriarContaCliente1.php");

    }
    else
    {
        header("Location:./../../../../toquenarede/Cliente/CriarContaCliente2.php");
    }
?>