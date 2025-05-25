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
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-color: #4CAF50;
            --secondary-color: #388E3C;
        }
        
        body {
            background-color: #f8f9fa;
        }
        
        .navbar {
            background-color: var(--primary-color);
        }
        
        .navbar-brand, .nav-link {
            color: white !important;
        }
        
        .nav-link:hover {
            color: #e0e0e0 !important;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }
        
        .page-title {
            color: var(--secondary-color);
        }
        
        .badge-planejada {
            background-color: #E3F2FD;
            color: #1565C0;
        }
        
        .badge-andamento {
            background-color: #FFF8E1;
            color: #FF8F00;
        }
        
        .badge-concluida {
            background-color: #E8F5E9;
            color: var(--secondary-color);
        }
        
        footer {
            background-color: #212529;
            color: white;
        }
        
        .product-item {
            display: flex;
            gap: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">AgroControl</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php"><i class="bi bi-house-door"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pessoas.php"><i class="bi bi-people"></i> Compradores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="produtos.php"><i class="bi bi-box-seam"></i> Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="vendas.php"><i class="bi bi-cash-coin"></i> Vendas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="colheitas.php"><i class="bi bi-basket"></i> Colheitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="relatorios.php"><i class="bi bi-graph-up"></i> Relatórios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><i class="bi bi-box-arrow-right"></i> Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="page-title"><i class="bi bi-basket"></i> Colheitas</h1>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#harvestModal">
                <i class="bi bi-plus-circle"></i> Nova Colheita
            </button>
        </div>
        
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
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
                        <td><span class="badge rounded-pill badge-concluida">Concluída</span></td>
                        <td>
                            <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#harvestModal">
                                <i class="bi bi-pencil"></i> Editar
                            </button>
                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#confirmModal">
                                <i class="bi bi-trash"></i> Excluir
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Colheita de Alface</td>
                        <td>22/05/2023</td>
                        <td>Alface (80kg)</td>
                        <td><span class="badge rounded-pill badge-andamento">Em andamento</span></td>
                        <td>
                            <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#harvestModal">
                                <i class="bi bi-pencil"></i> Editar
                            </button>
                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#confirmModal">
                                <i class="bi bi-trash"></i> Excluir
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Colheita de Rúcula</td>
                        <td>25/05/2023</td>
                        <td>Rúcula (60kg)</td>
                        <td><span class="badge rounded-pill badge-planejada">Planejada</span></td>
                        <td>
                            <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#harvestModal">
                                <i class="bi bi-pencil"></i> Editar
                            </button>
                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#confirmModal">
                                <i class="bi bi-trash"></i> Excluir
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <!-- Modal de Criação/Edição de Colheita -->
    <div class="modal fade" id="harvestModal" tabindex="-1" aria-labelledby="harvestModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="harvestModalLabel">Nova Colheita</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="harvestForm" method="POST">
                    <div class="modal-body">
                        <input type="hidden" id="harvestId" name="id">
                        <div class="mb-3">
                            <label for="harvestDescription" class="form-label">Descrição</label>
                            <textarea class="form-control" id="harvestDescription" name="descricao" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="harvestDate" class="form-label">Data</label>
                            <input type="date" class="form-control" id="harvestDate" name="data" required>
                        </div>
                        <div class="mb-3">
                            <label for="harvestStatus" class="form-label">Status</label>
                            <select class="form-select" id="harvestStatus" name="status" required>
                                <option value="planejada">Planejada</option>
                                <option value="andamento">Em andamento</option>
                                <option value="concluida">Concluída</option>
                            </select>
                        </div>
                        
                        <h5 class="mt-4">Produtos da Colheita</h5>
                        <div id="productList">
                            <div class="product-item mb-3">
                                <select class="form-select" name="produtos[]" required>
                                    <option value="">Selecione um produto</option>
                                    <option value="1">Tomate Orgânico</option>
                                    <option value="2">Alface Crespa</option>
                                    <option value="3">Cenoura</option>
                                    <option value="4">Rúcula</option>
                                </select>
                                <input type="number" class="form-control" name="quantidades[]" placeholder="Quantidade" min="1" required>
                            </div>
                        </div>
                        <button type="button" class="btn btn-outline-secondary" onclick="addProductField()">
                            <i class="bi bi-plus-circle"></i> Adicionar Produto
                        </button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Modal de Confirmação de Exclusão -->
    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmModalLabel">Confirmar Exclusão</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Tem certeza que deseja excluir esta colheita?</p>
                    <input type="hidden" id="colheitaToDelete">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger">Excluir</button>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="mt-5 py-3">
        <div class="container text-center">
            <p class="mb-0">AgroControl - Sistema de Controle Agrícola &copy; 2023</p>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>