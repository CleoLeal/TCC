<?php
    define('HOST','sql101.epizy.com');
    define('USUARIO','epiz_32979260');
    define('SENHA','BkhyT4njFNKF0c');
    define('DB','epiz_32979260_toquenarede');

    $conexao= mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Banco de dados OFF');
?>