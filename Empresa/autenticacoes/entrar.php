<?php   
        session_start();
        include("./../../Banco_de_dados/conexao.php");

        $senha = md5($_POST['senha']);
        $confirmar = md5($_POST['confirmar']);

        
        if($senha == $confirmar)
        {
                //mysqli_select_db($conexao,"testetnr"); ins
                mysqli_query($conexao, "INSERT INTO empresa (razaoSocial, nomeFantasia, emailEmpresa, telefoneEmpresa, cnpj, inscricaoEstadual, cep, numero, senhaEmpresa, confirmarEmpresa) values('".$_SESSION['razaoSocial']."','".$_SESSION['fantasia']."','".$_SESSION['email']."','".$_SESSION['telefone']."','".$_SESSION['cnpj']."','".$_SESSION['inscricaoEstadual']."','".$_SESSION['cep']."','".$_SESSION['numero']."','".$senha."','".$confirmar."')");
                header("Location: ./../../../../toquenarede/Empresa/loginEmpresa.php");        
        }
        else
        {
                header("Location:./../../../../toquenarede/Empresa/criarContaEmpresa3.php");
        }     
         
?>