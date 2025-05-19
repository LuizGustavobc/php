<?php 
    require __DIR__ . "/../db/connection.php";
class User 
{
    public function chec($user){
        try{
            $db = Connection::connect();
            $stmt = $db->query("SELECT (senha) FROM usuario WHERE login = \"$user\"");
            $user = $stmt->fetchAll();
            return $user[0];
        } catch(Exception $e){
            echo "<p class='erro'>".$e->getMessage()."</p>";
        } finally{
            Connection::disconnect();
        }
    }
}
