<?php
require_once '../controller/auth.php';
Auth::verifiRetur();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgroControl - Sistema de Controle Agrícola</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-color: #4CAF50;
            --secondary-color: #388E3C;
            --light-color: #C8E6C9;
            --dark-color: #2E7D32;
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
            color: var(--light-color) !important;
        }
        
        .dashboard-card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            height: 100%;
        }
        
        .dashboard-card:hover {
            transform: translateY(-5px);
        }
        
        .card-icon {
            font-size: 1.75rem;
            color: var(--secondary-color);
        }
        
        .card-value {
            font-size: 2rem;
            font-weight: bold;
            color: var(--primary-color);
        }
        
        .section-title {
            color: var(--secondary-color);
            margin: 2rem 0 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid var(--light-color);
        }
        
        .status {
            padding: 0.25rem 0.5rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }
        
        .status-pago, .status-pronto {
            background-color: #E8F5E9;
            color: var(--dark-color);
        }
        
        .status-pendente {
            background-color: #FFF3E0;
            color: #E65100;
        }
        
        .status-plantado {
            background-color: #E3F2FD;
            color: #1565C0;
        }
        
        footer {
            background-color: var(--dark-color);
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
                        <a class="nav-link" href="pessoas.php"><i class="bi bi-people"></i> Compradores</a>
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
        <!-- Dashboard Cards -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mb-4">
            <div class="col">
                <div class="card dashboard-card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title mb-0">Total de Produtos</h5>
                            <div class="card-icon">
                                <i class="bi bi-seed"></i>
                            </div>
                        </div>
                        <h2 class="card-value">124</h2>
                        <a href="produtos.php" class="btn btn-sm btn-outline-primary mt-3">Ver todos</a>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card dashboard-card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title mb-0">Vendas do Mês</h5>
                            <div class="card-icon">
                                <i class="bi bi-currency-dollar"></i>
                            </div>
                        </div>
                        <h2 class="card-value">R$ 24.580,00</h2>
                        <a href="vendas.php" class="btn btn-sm btn-outline-primary mt-3">Ver vendas</a>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card dashboard-card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title mb-0">Colheitas Recentes</h5>
                            <div class="card-icon">
                                <i class="bi bi-basket2"></i>
                            </div>
                        </div>
                        <h2 class="card-value">18</h2>
                        <a href="colheitas.php" class="btn btn-sm btn-outline-primary mt-3">Ver colheitas</a>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card dashboard-card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title mb-0">Clientes Ativos</h5>
                            <div class="card-icon">
                                <i class="bi bi-people-fill"></i>
                            </div>
                        </div>
                        <h2 class="card-value">56</h2>
                        <a href="pessoas.php" class="btn btn-sm btn-outline-primary mt-3">Ver clientes</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Vendas Recentes -->
        <h2 class="section-title">Vendas Recentes</h2>
        <div class="table-responsive mb-5">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Comprador</th>
                        <th>Produto</th>
                        <th>Valor</th>
                        <th>Data</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#1254</td>
                        <td>João Silva</td>
                        <td>Tomate Orgânico</td>
                        <td>R$ 120,00</td>
                        <td>15/05/2023</td>
                        <td><span class="status status-pago">Pago</span></td>
                    </tr>
                    <tr>
                        <td>#1253</td>
                        <td>Maria Oliveira</td>
                        <td>Alface Crespa</td>
                        <td>R$ 85,50</td>
                        <td>14/05/2023</td>
                        <td><span class="status status-pago">Pago</span></td>
                    </tr>
                    <tr>
                        <td>#1252</td>
                        <td>Carlos Souza</td>
                        <td>Cenoura</td>
                        <td>R$ 210,00</td>
                        <td>12/05/2023</td>
                        <td><span class="status status-pendente">Pendente</span></td>
                    </tr>
                    <tr>
                        <td>#1251</td>
                        <td>Ana Pereira</td>
                        <td>Batata Doce</td>
                        <td>R$ 175,00</td>
                        <td>10/05/2023</td>
                        <td><span class="status status-pago">Pago</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <!-- Próximas Colheitas -->
        <h2 class="section-title">Próximas Colheitas</h2>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Data Prevista</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#78</td>
                        <td>Tomate Cereja</td>
                        <td>150 kg</td>
                        <td>20/05/2023</td>
                        <td><span class="status status-pronto">Pronto</span></td>
                    </tr>
                    <tr>
                        <td>#79</td>
                        <td>Alface Americana</td>
                        <td>80 kg</td>
                        <td>22/05/2023</td>
                        <td><span class="status status-pendente">Em crescimento</span></td>
                    </tr>
                    <tr>
                        <td>#80</td>
                        <td>Rúcula</td>
                        <td>60 kg</td>
                        <td>25/05/2023</td>
                        <td><span class="status status-pendente">Em crescimento</span></td>
                    </tr>
                    <tr>
                        <td>#81</td>
                        <td>Cebolinha</td>
                        <td>40 kg</td>
                        <td>28/05/2023</td>
                        <td><span class="status status-plantado">Plantado</span></td>
                    </tr>
                </tbody>
            </table>
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