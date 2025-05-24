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
    <!-- Estilos iguais ao da home.php -->
    <link rel="stylesheet" href="css/vendas.css"/>
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
            <h1 class="page-title">Vendas</h1>
            <a href="nova_venda.php" class="btn">Nova Venda</a>
        </div>
        
        <table>
            <thead>
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
                    <td><span class="status status-pago">Pago</span></td>
                    <td class="actions">
                        <a href="editar_venda.php?id=1254" class="btn btn-secondary">Editar</a>
                        <button class="btn btn-danger">Cancelar</button>
                    </td>
                </tr>
                <tr>
                    <td>#1253</td>
                    <td>14/05/2023</td>
                    <td>Maria Oliveira</td>
                    <td>Alface Crespa (30un)</td>
                    <td>R$ 85,50</td>
                    <td>Dinheiro</td>
                    <td><span class="status status-pago">Pago</span></td>
                    <td class="actions">
                        <a href="editar_venda.php?id=1253" class="btn btn-secondary">Editar</a>
                        <button class="btn btn-danger">Cancelar</button>
                    </td>
                </tr>
                <tr>
                    <td>#1252</td>
                    <td>12/05/2023</td>
                    <td>Carlos Souza</td>
                    <td>Cenoura (50kg)</td>
                    <td>R$ 210,00</td>
                    <td>Boleto</td>
                    <td><span class="status status-pendente">Pendente</span></td>
                    <td class="actions">
                        <a href="editar_venda.php?id=1252" class="btn btn-secondary">Editar</a>
                        <button class="btn btn-danger">Cancelar</button>
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