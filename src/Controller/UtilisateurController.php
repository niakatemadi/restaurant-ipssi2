<?php
namespace src\Controller;

use src\Model\UtilisateurModel;
use Core\Controller\DefaultController;
require_once ROOT."/src/Model/UtilisateurModel.php";
require_once ROOT."/Core/Controller/DefaultController.php";

class UtilisateurController extends DefaultController{

    private UtilisateurModel $model;

    public function __construct(){

        $this->model=new UtilisateurModel;
    }

    public function getUser() {
        $utilisateurs = $this->model->getUserOne(1);
        $this->render("utilisateur/index",[ 'utilisateurs' => $utilisateurs]);
        require_once ROOT."/templates/base.php";
    }
}