<?php
namespace src\Controller;

use Core\Controller\DefaultController;

require_once ROOT."/Core/Controller/DefaultController.php";
final class PanierController extends DefaultController{

    public array $panier = [];

    public function getPanier() {
             
        $this->render("utilisateur/Menu/panier");
        
    }
}