<?php
    //inicio a sessão
    session_start();
    //variável de sessão
    $_SESSION['conta'] = $_POST['conta'];
    //avançar a página
    header("Location: ./../../../../toquenarede/esqueciSenha/EsqueciSenha.php");
?>  