<?php
    session_start();
    if(!isset($_SESSION['id_user']))
    {
    header("location: index.php");
    exit;
    }

?>

<h1>Seja bem vindo</h1></n>
<h2>Usuário conectado</h2>

<a href="sair.php">Sair</a>
