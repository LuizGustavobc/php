<?php
require_once '../controller/auth.php';
Auth::verifiRetur();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgroControl - Vendas</title>
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
        
        .badge-pago {
            background-color: #E8F5E9;
            color: var(--secondary-color);
        }
        
        .badge-pendente {
            background-color: #FFF3E0;
            color: #E65100;
        }
        
        .badge-cancelado {
            background-color: #FFEBEE;
            color: #C62828;
        }
        
        footer {
            background-color: #212529;
            color: white;
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
                        <a class="nav-link active" href="vendas.php"><i class="bi bi-cash-coin"></i> Vendas</a>
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
            <h1 class="page-title"><i class="bi bi-cash-coin"></i> Vendas</h1>
            <a href="nova_venda.php" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Nova Venda
            </a>
        </div>
        
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Data</th>
                        <th>Comprador</th>
                        <th>Produtos</th>
                        <th>Valor Total</th>
                        <th>Pagamento</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#1254</td>
                        <td>15/05/2023</td>
                        <td>João Silva</td>
                        <td>Tomate Orgânico (20kg)</td>
                        <td>R$ 120,00</td>
                        <td>Cartão</td>
                        <td><span class="badge rounded-pill badge-pago">Pago</span></td>
                        <td>
                            <a href="editar_venda.php?id=1254" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil"></i> Editar
                            </a>
                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#cancelModal" data-bs-id="1254">
                                <i class="bi bi-x-circle"></i> Cancelar
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>#1253</td>
                        <td>14/05/2023</td>
                        <td>Maria Oliveira</td>
                        <td>Alface Crespa (30un)</td>
                        <td>R$ 85,50</td>
                        <td>Dinheiro</td>
                        <td><span class="badge rounded-pill badge-pago">Pago</span></td>
                        <td>
                            <a href="editar_venda.php?id=1253" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil"></i> Editar
                            </a>
                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#cancelModal" data-bs-id="1253">
                                <i class="bi bi-x-circle"></i> Cancelar
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>#1252</td>
                        <td>12/05/2023</td>
                        <td>Carlos Souza</td>
                        <td>Cenoura (50kg)</td>
                        <td>R$ 210,00</td>
                        <td>Boleto</td>
                        <td><span class="badge rounded-pill badge-pendente">Pendente</span></td>
                        <td>
                            <a href="editar_venda.php?id=1252" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil"></i> Editar
                            </a>
                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#cancelModal" data-bs-id="1252">
                                <i class="bi bi-x-circle"></i> Cancelar
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <!-- Modal de Confirmação de Cancelamento -->
    <div class="modal fade" id="cancelModal" tabindex="-1" aria-labelledby="cancelModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cancelModalLabel">Confirmar Cancelamento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Tem certeza que deseja cancelar esta venda?</p>
                    <input type="hidden" id="vendaToCancel">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                    <button type="button" class="btn btn-danger">Sim, Cancelar</button>
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