<?php

namespace Core\Routeur;
use src\Controller\ErrorController;

use src\Controller\UtilisateurController;
use src\Controller\CommandeController;
use src\Controller\ProduitsController;
use src\Controller\PanierController;
use src\Controller\AjoutPanier;
use src\Controller\ReservationController;
use src\Model\AjoutPanierModel;
use src\Model\AjoutCommandeModel;
use src\Model\ReservationModel;

use src\Controller\AccueilController;
use src\Controller\ConnexionController;
use src\Controller\InscriptionController;
use src\Model\CreateInscriptionModel;
use src\Model\SeConnecterModel;
use src\Controller\SectionAdminController;
use src\Model\CreateAdminModel;
class Routeur
{
    public static function routes()
    {
        try {
            if (isset($_GET['page']) && !empty($_GET['page'])) {
                switch ($_GET['page']) {
                    case 'info_utilisateur':
                        (new UtilisateurController)->getUser();
                        break;
                    case 'info_mescommandes':
                        (new CommandeController)->getCommandes();
                        break;
                    case 'toutlesproduits':
                        (new ProduitsController)->getProducts();
                        break;
                    case 'panier':
                        (new PanierController)->getPanier();
                        break;
                    case 'ajout_panier':
                        (new AjoutPanierModel)->addPanier2();
                        break;
                    case 'send_commande':
                        (new AjoutCommandeModel)->sendCommande();
                        break;   
                    case 'mes_reservations':
                        (new ReservationController)->getReservations();
                        break; 
                    case 'available_table':
                        (new ReservationModel)->getAvailableTable();
                        break;
                    case 'accueil':
                        (new AccueilController)->displayAccueil();
                        break;
                    case 'connexion':
                        (new ConnexionController)->displayPageConnexion();
                        break;
                    case 'inscription':
                        (new InscriptionController)->displayPageInscription();
                        break; 
                    case 'create_inscription':
                        (new CreateInscriptionModel)->sendInscription();
                        break;  
                    case 'se_connecter':
                        (new SeConnecterModel)->verifConnexion();
                        break; 
                    case 'section_admin':
                        (new SectionAdminController)->displaySectionAdmin();
                        break;   
                    case 'create_admin':
                        (new CreateAdminModel)->sendInscriptionAdmin();
                        break;             
                }
            } else {
                (new AccueilController)->displayAccueil();
            }
        } catch (\Exception $e) {
            (new ErrorController)->error($e);
        }
    }
}
?>