<?php

require_once '../controller/auth.php';


Auth::verifiRetur();

?>
<!DOCTYPE php>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgroControl - Relatórios</title>
    <!-- Estilos iguais ao da home.php -->
    <link rel="stylesheet" href="css/relatorios.css"/>
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
            <h1 class="page-title">Relatórios</h1>
        </div>
        
        <div class="report-filters">
            <div class="filter-group">
                <label for="reportType">Tipo de Relatório:</label>
                <select id="reportType">
                    <option value="sales">Vendas</option>
                    <option value="harvest">Colheitas</option>
                    <option value="products">Produtos</option>
                    <option value="customers">Clientes</option>
                </select>
            </div>
            
            <div class="filter-group">
                <label for="startDate">Período:</label>
                <input type="date" id="startDate">
                <span>até</span>
                <input type="date" id="endDate">
            </div>
            
            <div class="filter-actions">
                <button class="btn">Gerar Relatório</button>
                <button class="btn">Exportar PDF</button>
                <button class="btn">Exportar Excel</button>
            </div>
        </div>
        
        <div class="report-results">
            <h3>Relatório de Vendas - Maio 2023</h3>
            
            <div class="chart-container">
                [Gráfico de Vendas por Semana]
            </div>
            
            <table>
                <thead>
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
                        <td>Pago</td>
                    </tr>
                    <tr>
                        <td>#1253</td>
                        <td>14/05/2023</td>
                        <td>Maria Oliveira</td>
                        <td>Alface Crespa</td>
                        <td>30 un</td>
                        <td>R$ 85,50</td>
                        <td>Pago</td>
                    </tr>
                    <tr>
                        <td>#1252</td>
                        <td>12/05/2023</td>
                        <td>Carlos Souza</td>
                        <td>Cenoura</td>
                        <td>50 kg</td>
                        <td>R$ 210,00</td>
                        <td>Pendente</td>
                    </tr>
                </tbody>
            </table>
            
            <div class="summary">
                <h4>Resumo</h4>
                <p>Total de Vendas: R$ 415,50</p>
                <p>Quantidade de Itens Vendidos: 100</p>
                <p>Média por Venda: R$ 138,50</p>
            </div>
        </div>
    </div>
    
    <footer>
        <p>AgroControl - Sistema de Controle Agrícola &copy; 2023</p>
    </footer>
</body>
</html>