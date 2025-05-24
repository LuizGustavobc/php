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
    <link rel="stylesheet" href="css/home.css"/>
</head>
<body>
    <header>
        <div class="logo">AgroControl</div>
        <nav>
            <ul>
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
        <div class="dashboard">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Total de Produtos</h3>
                    <div class="card-icon">🌱</div>
                </div>
                <div class="card-value">124</div>
                <div class="card-footer">
                    <a href="produtos.php" class="btn">Ver todos</a>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Vendas do Mês</h3>
                    <div class="card-icon">💰</div>
                </div>
                <div class="card-value">R$ 24.580,00</div>
                <div class="card-footer">
                    <a href="vendas.php" class="btn">Ver vendas</a>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Colheitas Recentes</h3>
                    <div class="card-icon">🧺</div>
                </div>
                <div class="card-value">18</div>
                <div class="card-footer">
                    <a href="colheitas.php" class="btn">Ver colheitas</a>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Clientes Ativos</h3>
                    <div class="card-icon">👥</div>
                </div>
                <div class="card-value">56</div>
                <div class="card-footer">
                    <a href="pessoas.php" class="btn">Ver clientes</a>
                </div>
            </div>
        </div>
        
        <h2 class="section-title">Vendas Recentes</h2>
        <table class="recent-table">
            <thead>
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
        
        <h2 class="section-title">Próximas Colheitas</h2>
        <table class="recent-table">
            <thead>
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
                    <td><span class="status status-pago">Pronto</span></td>
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
                    <td><span class="status status-pendente">Plantado</span></td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <footer>
        <p>AgroControl - Sistema de Controle Agrícola &copy; 2023</p>
    </footer>
</body>
</html>