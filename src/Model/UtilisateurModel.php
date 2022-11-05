<?php
namespace src\Model;
use Core\Database\Database;
require_once ROOT."/Core/Database/database.php";
class UtilisateurModel extends Database{

    public function getUsers()
    {
        $stmt = "SELECT * FROM utilisateurs";
        $users = $this->getData($stmt,true);

        return $users;
        
    }

    public function getUserOne($id)
    {
        $stmt = "SELECT * FROM utilisateurs WHERE id = $id";
        $user = $this->getData($stmt,true);

        return $user;
        
    }
}
?>