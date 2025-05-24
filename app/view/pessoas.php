<?php

require_once '../controller/auth.php';


Auth::verifiRetur();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgroControl - Compradores</title>
    <!-- Estilos iguais ao da home.php -->
    <link rel="stylesheet" href="css/pessoas.css"/>
</head>
<body>
    <header>
        <div class="logo">AgroControl</div>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="pessoas.php">Pessoas</a></li>
                <li><a href="produtos.php">Produtos</a></li>
                <li><a href="vendas.php">Vendas</a></li>
                <li><a href="colheitas.php">Colheitas</a></li>
                <li><a href="relatorios.php">Relatórios</a></li>
                <li><a href="logout.php">SAIR</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">Compradores</h1>
            <a href="novo_comprador.php" class="btn">Novo Comprador</a>
        </div>
        
        <div class="search-bar">
            <input type="text" placeholder="Pesquisar comprador...">
            <button class="btn">Buscar</button>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Identidade</th>
                    <th>Nascimento</th>
                    <th>Email</th>
                    <th>Endereço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>João Silva</td>
                    <td>123456789</td>
                    <td>15/05/1980</td>
                    <td>joao@email.com</td>
                    <td>Rua A, 123 - Centro</td>
                    <td class="actions">
                        <a href="editar_comprador.php?id=1" class="btn btn-secondary">Editar</a>
                        <button class="btn btn-danger">Excluir</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Maria Oliveira</td>
                    <td>987654321</td>
                    <td>22/10/1975</td>
                    <td>maria@email.com</td>
                    <td>Av. B, 456 - Jardim</td>
                    <td class="actions">
                        <a href="editar_comprador.php?id=2" class="btn btn-secondary">Editar</a>
                        <button class="btn btn-danger">Excluir</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Carlos Souza</td>
                    <td>456789123</td>
                    <td>30/03/1990</td>
                    <td>carlos@email.com</td>
                    <td>Rua C, 789 - Vila</td>
                    <td class="actions">
                        <a href="editar_comprador.php?id=3" class="btn btn-secondary">Editar</a>
                        <button class="btn btn-danger">Excluir</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <footer>
        <p>AgroControl - Sistema de Controle Agrícola &copy; 2023</p>
    </footer>
</body>
</html>