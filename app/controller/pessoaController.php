<?php 
require_once __DIR__ . '/../model/modelPessoa.php';
require_once __DIR__ . '/../model/userData/contatos.php';
require_once __DIR__ . '/../model/userData/endereco.php';


class PessoaController
{   
    public function cadastrar(){
        // Debug: Verifique o valor recebido
            error_log("Data recebida: " . $_POST['nascimento']);
            
            // Remove possíveis máscaras (se houver)
            $dataNascimento = trim($_POST['nascimento']);
            $dataNascimento = str_replace('/', '-', $dataNascimento);
            
            // Tenta primeiro o formato do input date (Y-m-d)
            $nascimento = DateTime::createFromFormat('Y-m-d', $dataNascimento);
            
            // Se falhar, tenta o formato brasileiro (d-m-Y)
            if (!$nascimento) {
                $nascimento = DateTime::createFromFormat('d-m-Y', $dataNascimento);
            }
            
            // Se ainda falhar, lança exceção
            if (!$nascimento) {
                throw new Exception("Formato de data inválido. Use YYYY-MM-DD ou DD-MM-AAAA. Valor recebido: " . $dataNascimento);
            }


        // Restante do código
        $contato = new Contatos();
        $contato->email = $_POST['email'] ?? '';
        $contato->numero = $_POST['numero'] ?? '';

        $endereco = new Endereco();
        $endereco->endereco = $_POST['endereco'] ?? '';
        $endereco->bairro = $_POST['bairro'] ?? '';
        $endereco->cep = $_POST['cep'] ?? '';
        $endereco->estado = $_POST['estado'] ?? '';

        $pessoa = new ModelPessoa($_POST['nome'], $_POST['identidade'] , $nascimento,$contato,$endereco);
        $id = $pessoa->create() ;
        return $id ;
    }
}
#$pessoa = new PessoaController();
#$pessoa->cadastro();