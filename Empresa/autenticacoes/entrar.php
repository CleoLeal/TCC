<?php   
        //iniciei uma sessaõ
        session_start();
        //inclui o banco de dados
        include("./../../Banco_de_dados/conexao.php");

        //variáveis
        $senha = md5($_POST['senha']);
        $confirmar = md5($_POST['confirmar']);

        //se a senha for igual ao confirmar
        if($senha == $confirmar)
        {
                //insere no banco de dados
                mysqli_query($conexao, "INSERT INTO empresa (razaoSocial, nomeFantasia, emailEmpresa, telefoneEmpresa, cnpj, inscricaoEstadual, cep, numero, senhaEmpresa, confirmarEmpresa) VALUES('".$_SESSION['razaoSocial']."','".$_SESSION['fantasia']."','".$_SESSION['email']."','".$_SESSION['telefone']."','".$_SESSION['cnpj']."','".$_SESSION['inscricaoEstadual']."','".$_SESSION['cep']."','".$_SESSION['numero']."','".$senha."','".$confirmar."')");
                //ele avança
                header("Location: ./../../../../toquenarede/Empresa/loginEmpresa.php");        
        }
        else
        {       //ele não avança e informa o erro
                header("Location:./../../../../toquenarede/Empresa/criarContaEmpresa3.php");
        }     
         
?>