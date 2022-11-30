<?php
    include("./../../Banco_de_dados/conexao.php");

    $email = $_POST['usuario'];
    $senha = $_POST['senha'];
    $_SESSION['eemail'] = $_POST['usuario'];
    $consulta = mysqli_query($conexao,"SELECT emailCliente, senhaCliente FROM cliente WHERE emailCliente = '$email' and senhaCliente = '$senha'");
    
    
        if(mysqli_num_rows($consulta)==1)
        {
            header("Location: ./../../../../toquenarede/Cliente/LoginPage.php");
           
            
        }
        else 
        {
            header("Location: ./../../../../toquenarede/Cliente/homeCliente.php");            
        }
    
    
?>