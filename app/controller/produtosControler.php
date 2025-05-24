<?php
require_once '../model/modelProdutos.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of produtosControler
 *
 * @author luizg
 */
class ProdutosControler {
    public function create() {
        
        
        $produtos = new ModelProdutos($_POST['valor'],$_POST['nome'],$_POST['medicao']);
        $produtos->create();
    }
}
