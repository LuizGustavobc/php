<?php 

final class Connection
{
    private static $host = 'localhost';
    private static $banco = 'dbprojetoauto';
    private static $usuario = 'admin';
    private static $senha = '123456';
    private static $conexao = null; 

    public static function connect() {
        if (self::$conexao !== null) {
            return self::$conexao;
        }

        try {
            self::$conexao = new PDO(
                "mysql:host=" . self::$host . ";dbname=" . self::$banco, 
                self::$usuario, 
                self::$senha
            );
            self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return self::$conexao;
        } catch(PDOException $e) {
            throw new Exception("Falha na conexão: " . $e->getMessage());
        }
    }

    public static function disconnect() {
        if (self::$conexao !== null) {
            self::$conexao = null; 
            return true;
        }
        return false;
    }

    private function __construct() {}
}

###  try {
###      $db = Connection::connect();
###      echo "Conectado com sucesso!\n";
###      
###      $stmt = $db->query("SELECT * FROM usuario");
###      
###      if ($stmt->rowCount() > 0) {
###         
###          $resultados = $stmt->fetchAll();
###         
###          foreach ($resultados as $linha) {
###              print_r($linha );
###              echo $linha['login']. "\n";
###          }
###      } else {
###          echo "\nNenhum resultado encontrado na tabela 'usuario'.\n";
###      }
###     
###  } catch(Exception $e) {
###      echo "Erro: " . $e->getMessage();
###  } finally {
###      Connection::disconnect();
###      echo "\nDesconectado do banco de dados.\n";
###  }