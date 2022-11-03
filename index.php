<?php
define("ROOT", __DIR__);
require_once ROOT."/src/utilisateurs/utilisateurs.php";
use src\utilisateurs\Utilisateur;

// Charge de fausses données en BDD pour les tests
// (new AppFixtures)->load();
// echo "Les fixtures sont chargées";

// Affiche notre page de catégories
(new Utilisateur)->getUsers();

?>