<?php
namespace src\Controller;

use Core\Controller\DefaultController;
require_once ROOT."/Core/Controller/DefaultController.php";

class InscriptionController extends DefaultController{


    public function displayPageInscription() {
        $message_daccueil ="Bienvenue sur la page d'inscription !";
        $this->renderAccueil("utilisateur/inscription",[ 'message_bienvenue' => $message_daccueil]);
    }
}