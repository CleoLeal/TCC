<?php   
        session_start();
        include("./../../Banco_de_dados/conexao.php");
        $data=$_POST['data'];
        $data = substr($dtnc,6,4)."-".substr($dtnc,3,2)."-".substr($dtnc,0,2);
        $senha = md5($_POST['senha']);
        $confirmarSenha = md5($_POST['confirmar']);
        if($senha==$confirmarSenha)
        {
                //mysqli_select_db($conexao,"testetnr");
                mysqli_query($conexao, "insert into cliente (nomeCliente, emailCliente, telefoneCliente, cepCliente, dtnscCliente, senhaCliente, confirmarCliente) values('".$_SESSION['nome']."','".$_SESSION['email']."','".$_SESSION['telefone']."','".$_SESSION['cep']."','".$data."','".$senha."','".$confirmarSenha."')");
                header("Location: ./../../../../toquenarede/Cliente/LoginPage.php");
        }
        else
        {
                header("Location: ./../../../../toquenarede/Cliente/CriarContaCliente2.php");
        }
        
        
?>

