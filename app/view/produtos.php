<?php 
require_once '../controller/auth.php';
require_once '../controller/produtosControler.php';

Auth::verifiRetur();

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $produtosC = new ProdutosControler();
    $produtosC->create();
}



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgroControl - Produtos</title>
    <link rel="stylesheet" href="css/produtos.css"/>
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
            <h1 class="page-title">Produtos</h1>
            <button class="btn" onclick="openModal('create')">Adicionar Produto</button>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Valor</th>
                    <th>Modificado</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Tomate Orgânico</td>
                    <td>R$ 5,90/kg</td>
                    <td>15/05/2023</td>
                    <td class="actions">
                        <button class="btn btn-secondary" onclick="openModal('edit', 1)">Editar</button>
                        <button class="btn btn-danger" onclick="confirmDelete(1)">Excluir</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Alface Crespa</td>
                    <td>R$ 3,50/un</td>
                    <td>14/05/2023</td>
                    <td class="actions">
                        <button class="btn btn-secondary" onclick="openModal('edit', 2)">Editar</button>
                        <button class="btn btn-danger" onclick="confirmDelete(2)">Excluir</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Cenoura</td>
                    <td>R$ 4,20/kg</td>
                    <td>12/05/2023</td>
                    <td class="actions">
                        <button class="btn btn-secondary" onclick="openModal('edit', 3)">Editar</button>
                        <button class="btn btn-danger" onclick="confirmDelete(3)">Excluir</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <!-- Modal de Criação/Edição -->
    <div id="productModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="modalTitle">Adicionar Produto</h2>
                <span class="close" onclick="closeModal()">&times;</span>
            </div>
            <form id="productForm">
                <input type="hidden" id="productId">
                <div class="form-group">
                    <label for="productName">Nome do Produto</label>
                    <input type="text" id="productName" required>
                </div>
                <div class="form-group">
                    <label for="productValue">Valor</label>
                    <input type="text" id="productValue" required>
                </div>
                <div class="form-group">
                    <label for="productModified">Modificado</label>
                    <input type="text" id="productModified" required>
                </div>
                <div class="form-actions">
                    <button type="button" class="btn btn-secondary" onclick="closeModal()">Cancelar</button>
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
                <span class="close" onclick="closeModal()">&times;</span>
            </div>
            <p>Tem certeza que deseja excluir este produto?</p>
            <div class="form-actions">
                <button type="button" class="btn btn-secondary" onclick="closeModal()">Cancelar</button>
                <button type="button" class="btn btn-danger" onclick="deleteProduct()">Excluir</button>
            </div>
        </div>
    </div>
    
    <footer>
        <p>AgroControl - Sistema de Controle Agrícola &copy; 2023</p>
    </footer>
    
    <script>
        // Funções para manipulação dos modais
        function openModal(action, id = null) {
            const modal = document.getElementById('productModal');
            const title = document.getElementById('modalTitle');
            const form = document.getElementById('productForm');
            
            if (action === 'create') {
                title.textContent = 'Adicionar Produto';
                form.reset();
                document.getElementById('productId').value = '';
            } else if (action === 'edit') {
                title.textContent = 'Editar Produto';
                // Aqui você buscaria os dados do produto com o ID fornecido
                // e preencheria o formulário
                document.getElementById('productId').value = id;
                document.getElementById('productName').value = 'Tomate Orgânico'; // Exemplo
                document.getElementById('productValue').value = '5.90';
                document.getElementById('productModified').value = '15/05/2023';
            }
            
            modal.style.display = 'flex';
        }
        
        function closeModal() {
            document.getElementById('productModal').style.display = 'none';
            document.getElementById('confirmModal').style.display = 'none';
        }
        
        function confirmDelete(id) {
            document.getElementById('confirmModal').style.display = 'flex';
            // Aqui você armazenaria o ID do produto a ser excluído
            document.getElementById('confirmModal').dataset.productId = id;
        }
        
        function deleteProduct() {
            const id = document.getElementById('confirmModal').dataset.productId;
            // Aqui você faria a requisição para excluir o produto
            console.log('Excluir produto ID:', id);
            closeModal();
            // Recarregar a lista de produtos ou remover o item da tabela
        }
        
        // Fechar o modal ao clicar fora dele
        window.onclick = function(event) {
            const modals = document.querySelectorAll('.modal');
            modals.forEach(modal => {
                if (event.target === modal) {
                    modal.style.display = 'none';
                }
            });
        }
        
        // Manipular o envio do formulário
        document.getElementById('productForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const id = document.getElementById('productId').value;
            const name = document.getElementById('productName').value;
            const value = document.getElementById('productValue').value;
            const modified = document.getElementById('productModified').value;
            
            if (id) {
                // Editar produto existente
                console.log('Editar produto:', {id, name, value, modified});
            } else {
                // Criar novo produto
                console.log('Criar produto:', {name, value, modified});
            }
            
            closeModal();
            // Recarregar a lista de produtos ou atualizar a tabela
        });
    </script>
</body>
</html>