<?php
namespace src\Model;
use Core\Database\Database;
require_once ROOT."/Core/Database/database.php";
class CommandeModel extends Database{

    public function getUserCommandes()
    {

        // On récupere un tableau dont chaque ligne correspond à une commande avec l'ensemble des
        // produit d'une commande concatener qui nous donne une chaine de caractère avec tout les id des produits
        $stmt = "SELECT id,status,type,id_element_carte,date_commande,id_commande,GROUP_CONCAT(id_element_carte) as id_commandes FROM commandes WHERE id_utilisateur=1 GROUP BY id_commande";
        $commandes = $this->getData($stmt,true);
       // var_dump($commandes);
        $allpanier=[];
       foreach($commandes as $commande)
        { 
           $stmt = "SELECT nom,prix,description,categorie,status FROM carte inner join commandes ON carte.id=commandes.id_element_carte WHERE carte.id IN ($commande->id_commandes) AND commandes.id_commande=$commande->id_commande";
            $panier = $this->getData($stmt,true);
           // var_dump($panier);
           //$panier['id_commande']=$commande->id_commande;

           // On retourne un tableau qui renvoie des tableau dont chaque tableau contient tout
           // les produits d'une commande et l'id du tableau correspond à l'id de la commance
           $allpanier[$commande->id_commande]=$panier;
          // array_push($allpanier,$panier);
        }
       // var_dump($allpanier);

        return $allpanier;
         
        
    }
    
    public function getUserOne($id)
    {
        $stmt = "SELECT * FROM utilisateurs WHERE id = $id";
        $user = $this->getData($stmt);

        return $user;
        
    }

    

    
}
?>