<?php 
    require __DIR__ . "/../../config/connection.php";
class ModelCheckUser 
{
    public function chec($user){
        try{
            $db = Connection::connect();
            $stmt = $db->query("SELECT (senha) FROM usuario WHERE login = \"$user\"");
            $user = $stmt->fetchAll();
            return $user[0] ?? null;
        } catch(Exception $e){
            throw new Exception($e->getMessage());
        } finally{
            Connection::disconnect();
        }
    }
}
