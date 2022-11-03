<?php
namespace src\utilisateurs;
use Core\Database\Database;
require_once ROOT."/Core/Database/database.php";

class Utilisateur{

    public function getUsers()
    {
        $pdo = (new Database)->getPdo();
        $stmt = "SELECT * FROM utilisateurs";
        $query = $pdo->query($stmt, \PDO::FETCH_OBJ);
        $utilisateurs = $query->fetchAll();

        require_once ROOT."/templates/utilisateur/index.php" ;

    }
}

?>