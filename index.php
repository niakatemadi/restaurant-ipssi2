<?php
use Core\Routeur\Routeur;
use src\Controller\UtilisateurController;
use src\Controller\CommandeController;
use src\Controller\ProduitsController;
use src\Model\AjoutPanierModel;


define("ROOT", __DIR__);
require ROOT."/vendor/autoload.php";
Routeur::routes();

//(new AjoutPanierModel)->addPanier();
?>