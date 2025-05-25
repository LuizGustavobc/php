<?php
require_once '../controller/auth.php';
Auth::verifiRetur();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgroControl - Relatórios</title>
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
        
        .report-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            padding: 1.5rem;
            margin-bottom: 2rem;
        }
        
        .summary-card {
            background-color: #f8f9fa;
            border-left: 4px solid var(--primary-color);
            padding: 1rem;
            border-radius: 4px;
        }
        
        .chart-placeholder {
            height: 400px;
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            margin-bottom: 2rem;
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
                        <a class="nav-link" href="vendas.php"><i class="bi bi-cash-coin"></i> Vendas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="colheitas.php"><i class="bi bi-basket"></i> Colheitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="relatorios.php"><i class="bi bi-graph-up"></i> Relatórios</a>
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
            <h1 class="page-title"><i class="bi bi-graph-up"></i> Relatórios</h1>
        </div>
        
        <!-- Filtros -->
        <div class="report-card mb-4">
            <h4 class="mb-4">Filtrar Relatório</h4>
            <form>
                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="reportType" class="form-label">Tipo de Relatório</label>
                        <select class="form-select" id="reportType" name="reportType">
                            <option value="sales">Vendas</option>
                            <option value="harvest">Colheitas</option>
                            <option value="products">Produtos</option>
                            <option value="customers">Clientes</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="startDate" class="form-label">Data Inicial</label>
                        <input type="date" class="form-control" id="startDate" name="startDate">
                    </div>
                    <div class="col-md-4">
                        <label for="endDate" class="form-label">Data Final</label>
                        <input type="date" class="form-control" id="endDate" name="endDate">
                    </div>
                    <div class="col-12">
                        <div class="d-flex justify-content-end gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-arrow-repeat"></i> Gerar Relatório
                            </button>
                            <button type="button" class="btn btn-outline-secondary">
                                <i class="bi bi-file-earmark-pdf"></i> Exportar PDF
                            </button>
                            <button type="button" class="btn btn-outline-secondary">
                                <i class="bi bi-file-earmark-excel"></i> Exportar Excel
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        
        <!-- Resultados -->
        <div class="report-card">
            <h3 class="mb-4">Relatório de Vendas - Maio 2023</h3>
            
            <!-- Placeholder do Gráfico -->
            <div class="chart-placeholder">
                <div class="text-center text-muted">
                    <i class="bi bi-bar-chart" style="font-size: 3rem;"></i>
                    <p class="mt-2">Gráfico de Vendas por Semana</p>
                </div>
            </div>
            
            <!-- Tabela -->
            <div class="table-responsive mb-4">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>ID Venda</th>
                            <th>Data</th>
                            <th>Comprador</th>
                            <th>Produto</th>
                            <th>Quantidade</th>
                            <th>Valor</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#1254</td>
                            <td>15/05/2023</td>
                            <td>João Silva</td>
                            <td>Tomate Orgânico</td>
                            <td>20 kg</td>
                            <td>R$ 120,00</td>
                            <td><span class="badge bg-success">Pago</span></td>
                        </tr>
                        <tr>
                            <td>#1253</td>
                            <td>14/05/2023</td>
                            <td>Maria Oliveira</td>
                            <td>Alface Crespa</td>
                            <td>30 un</td>
                            <td>R$ 85,50</td>
                            <td><span class="badge bg-success">Pago</span></td>
                        </tr>
                        <tr>
                            <td>#1252</td>
                            <td>12/05/2023</td>
                            <td>Carlos Souza</td>
                            <td>Cenoura</td>
                            <td>50 kg</td>
                            <td>R$ 210,00</td>
                            <td><span class="badge bg-warning text-dark">Pendente</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!-- Resumo -->
            <div class="summary-card">
                <h4 class="mb-3">Resumo</h4>
                <div class="row">
                    <div class="col-md-4">
                        <p class="mb-1"><strong>Total de Vendas:</strong></p>
                        <h5>R$ 415,50</h5>
                    </div>
                    <div class="col-md-4">
                        <p class="mb-1"><strong>Quantidade de Itens:</strong></p>
                        <h5>100</h5>
                    </div>
                    <div class="col-md-4">
                        <p class="mb-1"><strong>Média por Venda:</strong></p>
                        <h5>R$ 138,50</h5>
                    </div>
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