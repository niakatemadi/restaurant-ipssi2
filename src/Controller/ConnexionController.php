<?php
namespace src\Controller;

use Core\Controller\DefaultController;
require_once ROOT."/Core/Controller/DefaultController.php";

class ConnexionController extends DefaultController{


    public function displayPageConnexion() {
        $message_daccueil ="Bienvenue sur la page de connexion !";
        $this->renderAccueil("utilisateur/connexion",[ 'message_bienvenue' => $message_daccueil]);
    }
}