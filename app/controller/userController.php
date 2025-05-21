<?php 
require_once __DIR__ . '/../model/modelUser.php';
require_once __DIR__ .'/pesoaControle.php';

class UserController{
    
    public function cadastrar(){
        $pessoa = new PesoaControle();
        $idPessoa = $pessoa->cadastrar();

        $loguin = $_POST['usuario'];
        $senha = $_POST['senha'];

        $user = new ModelUser($loguin, $senha, $idPessoa);
        $id = $user->create();
        if ($id !== 0 && $id !== null) {
            $_SESSION['logado'] = true;
            $_SESSION['usuario'] = $_POST['usuario'];
            return true;
        }else{
            false;
        }
    }
}

#$user = new UserController();
#$user->cadastrar("luiz","1234", 1);