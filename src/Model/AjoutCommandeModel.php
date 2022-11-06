<?php

namespace src\Model;
use Core\Database\Database;
require_once ROOT."/Core/Database/database.php";
class AjoutCommandeModel extends Database {

   
    public function sendCommande(){
        session_start();
        
        if($_GET['id_commande']){
            var_dump($_GET['id_commande']);
            var_dump($_SESSION['info_produits']);
            
            $id_utilisateur = 1;
            $id_commande = $_GET['id_commande'];
            foreach($_SESSION['info_produits'] as $produit)
            {
                $stmt = "INSERT INTO commandes(id_utilisateur, id_element_carte, id_commande) VALUES($id_utilisateur, $produit->id, $id_commande)";
                $reponse = $this->postData($stmt);
            }

            header("Location:?page=toutlesproduits");
           
        }
        
    }
}
?>