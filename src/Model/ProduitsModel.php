<?php
namespace src\Model;
use Core\Database\Database;
require_once ROOT."/Core/Database/database.php";
class ProduitsModel extends Database{

    public function getAllProducts()
    {
        $stmt = "SELECT * from carte order by categorie";
        $products = $this->getData($stmt,true);
        //var_dump($products);
        
        return $products;
         
    }
    
    public function getUserOne($id)
    {
        $stmt = "SELECT * FROM utilisateurs WHERE id = $id";
        $user = $this->getData($stmt);

        return $user;
        
    }

    
}
?>