<?php

namespace src\Model;
use Core\Database\Database;
require_once ROOT."/Core/Database/database.php";
class AjoutPanierModel extends Database {

    public function addPanier()
    {
        var_dump($_GET['page']);
        try {
            if (isset($_GET['id']) && !empty($_GET['id'])) {
                echo $_GET['page'].'recu'.$_GET['id'];
            } else {
                echo 'pas recu de produit';
            }
        } catch (\Exception $e) {
            (new ErrorController)->error($e);
        }
    }

    public function addpanier2()
    {
        //Verifier si une session existe
        if(!isset($_SESSION)){

            // Si non démarrer la session
            session_start();
        }

        // Créer la session
        if(!isset($_SESSION['panier'])){
            //S'il nexiste pas une session panier on en créer une et on l'initialise avec un tableau
            $_SESSION['panier']= [];
        }
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $stmt = "SELECT * FROM carte WHERE id=$id";
           $produit = $this->getData($stmt,true);

            
        }
        if(empty($produit)){
            die("Ce produit n'existe pas");
        }

        //Ajouter le produit dans le panier (tableau)
        if(isset($_SESSION['panier'][$id])){
            //Si le produit est déja dans le panier
            $_SESSION['panier'][$id]++; // représente la quantité

        }else{
             //si non ajouter le produit
             $_SESSION['panier'][$id]=1;
             echo 'Le produit à bien été ajouté';

             //Ajouter le tableau associé au panier

             var_dump($_SESSION['panier']);
        }

        // liste des produits
        //Récupérer les clés du tableau session
        $ids = array_keys($_SESSION['panier']);

        if(!empty($ids)){

            $liste_ids = implode(',',$ids);

            $stmt="SELECT * FROM carte WHERE id IN ($liste_ids)";
            session_start();
            $_SESSION['info_produits']= $this->getData($stmt,true);
           // var_dump($_SESSION['info_produits']);
        }
        header("Location:?page=toutlesproduits");
    }
}
?>