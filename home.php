<?php
require_once 'Auth.php';
Auth::protegerPagina();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Página Principal</title>
    <link rel="stylesheet" href="assets/css/styleHome.css">
</head>
<body>
    <header>
        <h1>Bem vindo ao seu sistema de controle!</h1>
    </header>
    <section id="page">
        <div id="nav">
            <a href="">inicio</a>
            <a href="">produtos</a>
            <a href="">vendas</a>
            <a href="">clientes</a>
            <a href="">recibos</a>
            <a href="logout.php" style="margin-top: auto;">sair</a>
        </div>

        <div id="content">
            <p>Ola</p>
        </div>
    </section>
</body>
</html>