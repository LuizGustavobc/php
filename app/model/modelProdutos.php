<?php
    require_once '../../config/connection.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of modelProdutos
 *
 * @author luizg
 */
class ModelProdutos {
    private int $id;


    public function __construct(
        private float $valor, 
        private string $nome,
        private string $medicao,
    ) {
    }
    
    public function create(){
        try {
            $con = Connection::connect();
            $stmt = $con->prepare("
                INSERT INTO produto(valor, nome, medicao) 
                VALUES (:valor, :nome, :medicao)");
            $stmt->execute([
                ':valor' => $this->valor,
                ':nome' => $this->nome,
                ':medicao' => $this->medicao
            ]);
            
            $this->id = $con->lastInsertId();
            return $this->id;
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage());
        } finally {
            Connection::disconnect();
        }
    }
}
