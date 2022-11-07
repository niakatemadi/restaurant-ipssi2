<?php

namespace src\Model;
use Core\Database\Database;
require_once ROOT."/Core/Database/database.php";
class SeConnecterModel extends Database {

   
    public function verifConnexion(){
        session_start();

        $_pseudo = $_GET['pseudo'];
        $_password = $_GET['password'];
        
        
        var_dump($_pseudo);
            

                $stmt = "SELECT * FROM utilisateurs WHERE email ='$_pseudo'";
                $reponse = $this->getData($stmt);
            var_dump($reponse);

            if($_password == $reponse->password && $reponse->statut=='client')
            {
                header("Location:?page=toutlesproduits");
            }else{
                header("Location:?page=section_admin");
            }
            
           
        
        
    }
}
?>