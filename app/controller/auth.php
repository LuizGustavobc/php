<?php
require_once __DIR__. "/checkUser.php";


class Auth {

    // Verifica se o usuário está logado
    public static function estaLogado() {
        return isset($_SESSION['logado']) && $_SESSION['logado'] === true;
    }

    // Processa o login
    public static function login($usuario, $senha) {

        $chec = new CheckUser($usuario, $senha);
        $verifi = $chec->verifi();

        if ($verifi == true) {
            $_SESSION['logado'] = true;
            $_SESSION['usuario'] = $usuario;
            return true;
        }
        return false;
    }

    // Faz logout
    public static function logout() {
        $_SESSION = array();
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        session_destroy();
    }

    // Protege uma página (redireciona se não estiver logado)
    public static function protegerPagina() {
        if (!self::estaLogado()) {

            header("Location: ../../public/index.php");

            exit;

        }
    }

    // Retorna o nome do usuário logado
    public static function getUsuario() {

        return $_SESSION['usuario'] ?? null;
        
    }
}
