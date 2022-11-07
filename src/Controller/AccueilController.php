<?php
namespace src\Controller;

use Core\Controller\DefaultController;
require_once ROOT."/Core/Controller/DefaultController.php";

class AccueilController extends DefaultController{


    public function displayAccueil() {
        $message_daccueil ="Bienvenue chez Resto IPSSI !";
        $this->renderAccueil("utilisateur/accueil",[ 'message_bienvenue' => $message_daccueil]);
    }
}