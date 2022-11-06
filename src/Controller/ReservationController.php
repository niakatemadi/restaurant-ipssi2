<?php
namespace src\Controller;

use src\Model\ReservationModel;
use Core\Controller\DefaultController;

require_once ROOT."/Core/Controller/DefaultController.php";
require_once ROOT."/src/Model/ReservationModel.php";
final class ReservationController extends DefaultController{

    private ReservationModel $model;

    public function __construct(){

        $this->model=new ReservationModel;
    }

    public function getReservations() {
    
        $reservations = $this->model->getUserReservations();
            
        $this->render("utilisateur/mesReservations/mesReservations",[ 'liste_reservations' => $reservations]);
    }
}