<?php

require_once '../controller/auth.php';


Auth::verifiRetur();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgroControl - Colheitas</title>
    <link rel="stylesheet" href="css/colheitas.css"/>
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
            <h1 class="page-title">Colheitas</h1>
            <button class="btn" id="newHarvestBtn">Nova Colheita</button>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Data</th>
                    <th>Produtos</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Colheita de Tomate Orgânico</td>
                    <td>15/05/2023</td>
                    <td>Tomate (150kg)</td>
                    <td><span class="status status-concluida">Concluída</span></td>
                    <td class="actions">
                        <button class="btn btn-secondary">Editar</button>
                        <button class="btn btn-danger">Excluir</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Colheita de Alface</td>
                    <td>22/05/2023</td>
                    <td>Alface (80kg)</td>
                    <td><span class="status status-andamento">Em andamento</span></td>
                    <td class="actions">
                        <button class="btn btn-secondary">Editar</button>
                        <button class="btn btn-danger">Excluir</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Colheita de Rúcula</td>
                    <td>25/05/2023</td>
                    <td>Rúcula (60kg)</td>
                    <td><span class="status status-planejada">Planejada</span></td>
                    <td class="actions">
                        <button class="btn btn-secondary">Editar</button>
                        <button class="btn btn-danger">Excluir</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <!-- Modal de Criação/Edição de Colheita -->
    <div id="harvestModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Nova Colheita</h2>
                <span class="close">&times;</span>
            </div>
            <form id="harvestForm">
                <input type="hidden" id="harvestId">
                <div class="form-group">
                    <label for="harvestDescription">Descrição</label>
                    <textarea id="harvestDescription" required></textarea>
                </div>
                <div class="form-group">
                    <label for="harvestDate">Data</label>
                    <input type="date" id="harvestDate" required>
                </div>
                <div class="form-group">
                    <label for="harvestStatus">Status</label>
                    <select id="harvestStatus" required>
                        <option value="planejada">Planejada</option>
                        <option value="andamento">Em andamento</option>
                        <option value="concluida">Concluída</option>
                    </select>
                </div>
                
                <h4>Produtos da Colheita</h4>
                <div class="product-list" id="productList">
                    <div class="product-item">
                        <select class="product-select" required>
                            <option value="">Selecione um produto</option>
                            <option value="1">Tomate Orgânico</option>
                            <option value="2">Alface Crespa</option>
                            <option value="3">Cenoura</option>
                            <option value="4">Rúcula</option>
                        </select>
                        <input type="number" class="product-quantity" placeholder="Quantidade" min="1" required>
                    </div>
                </div>
                <button type="button" class="add-product btn">+ Adicionar Produto</button>
                
                <div class="form-actions">
                    <button type="button" class="btn btn-secondary">Cancelar</button>
                    <button type="submit" class="btn">Salvar</button>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Modal de Confirmação de Exclusão -->
    <div id="confirmModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Confirmar Exclusão</h2>
                <span class="close">&times;</span>
            </div>
            <p>Tem certeza que deseja excluir esta colheita?</p>
            <div class="form-actions">
                <button type="button" class="btn btn-secondary">Cancelar</button>
                <button type="button" class="btn btn-danger">Excluir</button>
            </div>
        </div>
    </div>
    
    <footer>
        <p>AgroControl - Sistema de Controle Agrícola &copy; 2023</p>
    </footer>
</body>
</html>