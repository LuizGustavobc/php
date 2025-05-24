<?php
require_once '../app/controller/auth.php';
require_once '../app/controller/userController.php';



if (Auth::estaLogado()) {
    header("Location: ../app/view/home.php");
    exit;
}

if (!isset($_SESSION['modo_login'])) {
    $_SESSION['modo_login'] = true;
}

if (isset($_GET['alternar'])) {
    $_SESSION['modo_login'] = !$_SESSION['modo_login'];
    header("Location: ".$_SERVER['PHP_SELF']); // Recarrega a página sem parâmetros
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_SESSION['modo_login'] === true) {
        $usuario = $_POST['usuario'] ?? '';
        $senha = $_POST['senha'] ?? '';
        
        if (Auth::login($usuario, $senha)) {
            header("Location: ../app/view/home.php");
            exit;
        } else {
            $erro = "Usuário ou senha incorretos!";
        }
    } else {
        $userC = new UserController();
        if ($userC->cadastrar()) {
            header('Location: ../app/view/home.php');
            exit;
        } else {
            $erro = 'Erro ao cadastrar usuario';
        }
    }
}
?>

<!DOCTYPE php>
<php lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if($_SESSION['modo_login'] === true){echo 'Login';}else{echo 'Cadastrar';}?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="login-container">
        <h1><?php if($_SESSION['modo_login'] === true){echo 'Login';}else{echo 'Cadastrar';}?></h1>
        <?php if (isset($erro)): ?>
            <div class="erro"><?php echo $erro; ?></div>
        <?php endif; ?>
        <form method="POST">
            <?php if ($_SESSION['modo_login']): ?>
                <div class="form-group">
                    <label for="usuario">Usuário:</label>
                    <input type="text" id="usuario" name="usuario" required>
                </div>
                <div class="form-group">
                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" required>
                </div> 
                <button type="submit" class="btn-login">Entrar</button>
                <a href="?alternar">Não possui conta?</a>
            <?php else:?>
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="identidade">Identidade:</label>
                    <input type="number" id="identidade" name="identidade" required>
                </div>
                <div class="form-group">
                    <label for="nascimento">Data de Nascimento:</label>
                    <input type="date" id="nascimento" name="nascimento" placeholder="dd/mm/aaaa" required>
                </div>
                <div class="form-group">
                    <label for="numero">Telefone:</label>
                    <input type="tel" id="numero" name="numero" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="endereco">Endereço:</label>
                    <input type="text" id="endereco" name="endereco" required>
                </div>
                <div class="form-group">
                    <label for="bairro">Bairro:</label>
                    <input type="text" id="bairro" name="bairro" required>
                </div>
                <div class="form-group">
                    <label for="cep">CEP:</label>
                    <input type="number" id="cep" name="cep" required>
                </div>
                <div class="form-group">
                    <label for="estado">Estado:</label>
                    <input type="text" id="estado" name="estado" required>
                </div>
                <div class="form-group">
                    <label for="usuario">Usuário:</label>
                    <input type="text" id="usuario" name="usuario" required>
                </div>
                <div class="form-group">
                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" required>
                </div>
                <button type="submit" class="btn-login">Cadastrar</button>
                <a href="?alternar">Já possui conta?</a>
            <?php endif;?>
        </form>
    </div>
</body>
</php>