<?php
    session_start();
    $_SESSION['conta'] = $_POST['conta'];

    header("Location: ./../../../../toquenarede/esqueciSenha/EsqueciSenha.php");
?>  