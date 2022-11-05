<?php
namespace src\Controller;

use src\Model\CommandeModel;
use Core\Controller\DefaultController;

require_once ROOT."/Core/Controller/DefaultController.php";
require_once ROOT."/src/Model/CommandeModel.php";
final class AjoutPanier extends DefaultController{

    private CommandeModel $model;

    public function __construct(){

        $this->model=new CommandeModel;
    }

    public function getMyPanier() {
        //Je récupère un tableau d'objet dont chaque objet correspond a une commande
        //dans chaque objet se trouve la key id_commandes qui regroupes une chaine de caractère
        // cette chaine de caractère correspond a une concatenation de tout les produits de cette commande
        $commandes = $this->model->getUserCommandes();
            
        //var_dump($commandes);
        $this->render("utilisateur/Menu/ajout_panier");
        // Ce tableau va contenir 
    }
}