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
        
        footer {
            background-color: var(--dark-color);
            color: white;
        }
        
        .search-box {
            max-width: 400px;
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
                        <a class="nav-link active" href="pessoas.php"><i class="bi bi-people-fill"></i> Compradores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="produtos.php"><i class="bi bi-box-seam"></i> Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="vendas.php"><i class="bi bi-cash-coin"></i> Vendas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="colheitas.php"><i class="bi bi-basket"></i> Colheitas</a>
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
            <h1 class="page-title"><i class="bi bi-people-fill"></i> Compradores</h1>
            <a href="novo_comprador.php" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Novo Comprador
            </a>
        </div>
        
        <!-- Barra de pesquisa -->
        <div class="input-group mb-4 search-box">
            <input type="text" class="form-control" placeholder="Pesquisar comprador...">
            <button class="btn btn-outline-secondary" type="button">
                <i class="bi bi-search"></i> Buscar
            </button>
        </div>
        
        <!-- Tabela de compradores -->
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
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
                        <td>
                            <a href="editar_comprador.php?id=1" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil"></i> Editar
                            </a>
                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#confirmModal" data-bs-id="1">
                                <i class="bi bi-trash"></i> Excluir
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Maria Oliveira</td>
                        <td>987654321</td>
                        <td>22/10/1975</td>
                        <td>maria@email.com</td>
                        <td>Av. B, 456 - Jardim</td>
                        <td>
                            <a href="editar_comprador.php?id=2" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil"></i> Editar
                            </a>
                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#confirmModal" data-bs-id="2">
                                <i class="bi bi-trash"></i> Excluir
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Carlos Souza</td>
                        <td>456789123</td>
                        <td>30/03/1990</td>
                        <td>carlos@email.com</td>
                        <td>Rua C, 789 - Vila</td>
                        <td>
                            <a href="editar_comprador.php?id=3" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil"></i> Editar
                            </a>
                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#confirmModal" data-bs-id="3">
                                <i class="bi bi-trash"></i> Excluir
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
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
                    <p>Tem certeza que deseja excluir este comprador?</p>
                    <input type="hidden" id="compradorToDelete">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger" id="confirmDelete">Excluir</button>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="mt-5 py-3 text-center">
        <div class="container">
            <p class="mb-0">AgroControl - Sistema de Controle Agrícola &copy; 2023</p>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>