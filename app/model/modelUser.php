<?php 
require_once __DIR__ . '/modelPessoa.php';
require_once __DIR__ .'/../../config/connection.php';

class ModelUser extends ModelPessoa{
    private int $id;
    private DateTime $dataCriacao;

    public function __construct(
       private string $login,
       private string $senha,
       private int $idPessoa, 
    ) {}
    
    public function create(){
        try {
            $con = Connection::connect();

            $dataCriacao = new DateTime();
            $data = $dataCriacao->format('Y-m-d'); 
            $this->dataCriacao = $dataCriacao;

            $stmt = $con->prepare("
                INSERT INTO usuario (login, senha, dataCriacao, idPessoa) 
                VALUES (:login, :senha, :dataCriacao, :idPessoa)
            ");
            
            $stmt->execute([
                ':login' => $this->login,
                ':senha' => $this->senha,
                ':dataCriacao' => $data,
                ':idPessoa' => $this->idPessoa
            ]);

            $this->id = $con->lastInsertId();
            return $this->id;

        } catch(Exception $e) {
            throw new Exception($e->getMessage()); 
        } finally {
            Connection::disconnect();
        }
    }
    public function read(){
        try{
            $con = Connection::connect();
            $stmt = $con->query("");
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }finally{
            Connection::disconnect();
        }
    }
    public function update(){
        try{
            $con = Connection::connect();
            $stmt = $con->query("");
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }finally{
            Connection::disconnect();
        }
    }
    public function delet(){
        try{
            $con = Connection::connect();
            $stmt = $con->query("");
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }finally{
            Connection::disconnect();
        }
    }
}
#$user = new ModelUser('luiz4', '1234', 1);
#$idCadastrado = $user->create();
#echo "ID do usuário cadastrado: " . $idCadastrado;