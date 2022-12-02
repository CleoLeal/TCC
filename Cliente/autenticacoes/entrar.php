<?php   
        //iniciei uma sessão
        session_start();
        //inclui o banco de dados
        include("./../../Banco_de_dados/conexao.php");
        //variáveis 
        $data=$_POST['data'];
        //peguei a data e substitui o formato dela
        $data = substr($dtnc,6,4)."-".substr($dtnc,3,2)."-".substr($dtnc,0,2);
        $senha = md5($_POST['senha']);
        $confirmarSenha = md5($_POST['confirmar']);
        //se a senha e a confirmarção de senha estiverem iguais
        if($senha==$confirmarSenha)
        {
                //os dados são inseridos no banco de dados e conta criada
                mysqli_query($conexao, "insert into cliente (nomeCliente, emailCliente, telefoneCliente, cepCliente, dtnscCliente, senhaCliente, confirmarCliente) values('".$_SESSION['nome']."','".$_SESSION['email']."','".$_SESSION['telefone']."','".$_SESSION['cep']."','".$data."','".$senha."','".$confirmarSenha."')");
                //avançou de página
                header("Location: ./../../../../toquenarede/Cliente/LoginPage.php");
        }
        else
        {       //caso não seja iguais, ele continua na mesma página
                header("Location: ./../../../../toquenarede/Cliente/CriarContaCliente2.php");
        }
        
        
?>

