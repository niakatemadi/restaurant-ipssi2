<?php
namespace src\Controller;

use src\Model\ProduitsModel;
use Core\Controller\DefaultController;

require_once ROOT."/Core/Controller/DefaultController.php";
require_once ROOT."/src/Model/ProduitsModel.php";
final class ProduitsController extends DefaultController{

    private ProduitsModel $model;

    public function __construct(){

        $this->model=new ProduitsModel;
    }

    public function getproducts() {
        //Je récupère un tableau d'objet dont chaque objet correspond a une commande
        //dans chaque objet se trouve la key id_commandes qui regroupes une chaine de caractère
        // cette chaine de caractère correspond a une concatenation de tout les produits de cette commande
        $commandes = $this->model->getAllProducts();
            
       // var_dump($commandes);
        $this->render("utilisateur/Menu/menu",[ 'liste_produits' => $commandes]);
        // Ce tableau va contenir 
    }
}