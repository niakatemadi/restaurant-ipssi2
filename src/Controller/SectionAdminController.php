<?php
namespace src\Controller;

use Core\Controller\DefaultController;
require_once ROOT."/Core/Controller/DefaultController.php";

class SectionAdminController extends DefaultController{


    public function displaySectionAdmin() {
        $message_daccueil ="Bienvenue sur la section administrateur !";
        $this->renderAdmin("utilisateur/admin",[ 'message_bienvenue' => $message_daccueil]);
    }
}