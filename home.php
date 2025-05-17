<?php
require_once 'Auth.php';
Auth::protegerPagina();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Página Protegida</title>
</head>
<body>
    <h1>Bem-vindo, <?php echo htmlspecialchars(Auth::getUsuario()); ?>!</h1>
    <a href="logout.php">Sair</a>
</body>
</html>