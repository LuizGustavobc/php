<?php

require_once 'Auth.php';

// Processa o formulário de login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';
    
    if (Auth::login($usuario, $senha)) {
        header("Location: home.php");
        exit;
    } else {
        $erro = "Usuário ou senha incorretos!";
    }

}

// Se já estiver logado, redireciona
if (Auth::estaLogado()) {

    header("Location: home.php");

    exit;
    
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div id="login-container">
        <h1>Login</h1>
        <?php if (isset($erro)): ?>
            <div class="erro"><?php echo $erro; ?></div>
        <?php endif; ?>
        <form method="POST">
            <div class="form-group">
                <label for="usuario">Usuário:</label>
                <input type="text" id="usuario" name="usuario" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
            </div> 
            <button type="submit" class="btn-login">Entrar</button>
        </form>
    </div>
</body>
</html>