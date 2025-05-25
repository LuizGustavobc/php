<?php 
include_once __DIR__.'/../../config/connection.php';

class ModelPessoa{
    private int $id;

    public function __construct(
        private string $nome,
        private int $identidade,
        private DateTime $nascimento,
        private Contatos $contatos,   
        private Endereco $endereco, 
            
            
    ) {}
    
    public function create(){
        try{
            $con = Connection::connect();
            $stmt = $con->prepare("
            INSERT INTO pessoa(nome, identidade, nascimento, numero, email, endereco, bairro, cep, estado)
            VALUES (:nome, :identidade, :nascimento, :numero, :email, :endereco, :bairro, :cep, :estado);");
            
            $stmt->execute([
                ':nome' => $this->nome, 
                ':identidade' => $this->identidade, 
                ':nascimento' => $this->nascimento->format('Y-m-d'), 
                ':numero' => $this->contatos->numero, 
                ':email' => $this->contatos->email, 
                ':endereco' => $this->endereco->endereco, 
                ':bairro' => $this->endereco->bairro, 
                ':cep' => $this->endereco->cep, 
                ':estado' => $this->endereco->estado
            ]);
            
            $this->id = $con->lastInsertId();
            return $this->id;
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }finally{
            Connection::disconnect();
        }
    }
    public function read(){
        try{
            $con = Connection::connect();
            $stmt = $con->query("");
        }catch(Exception $e){
            new Exception($e->getMessage());
        }finally{
            Connection::disconnect();
        }
    }
    public function update(){
        try{
            $con = Connection::connect();
            $stmt = $con->query("");
        }catch(Exception $e){
            new Exception($e->getMessage());
        }finally{
            Connection::disconnect();
        }
    }
    public function delet(){
        try{
            $con = Connection::connect();
            $stmt = $con->query("");
        }catch(Exception $e){
            new Exception($e->getMessage());
        }finally{
            Connection::disconnect();
        }
    }
}