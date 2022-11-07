<?php
namespace src\Model;
use Core\Database\Database;
require_once ROOT."/Core/Database/database.php";
class ReservationModel extends Database{

    public function getUserReservations()
    {
        $stmt = "SELECT * FROM reservations WHERE id_utilisateur=1";
        $user_reservations = $this->getData($stmt,true);
        
        return $user_reservations;
         
    }

    public function getAvailableTable()
    {

        if(!empty($_GET['debut_reservation']) && !empty($_GET['fin_reservation']))
        {
            $debut_reservation=$_GET['debut_reservation'];
            $fin_reservation=$_GET['fin_reservation'];
            var_dump($fin_reservation);
            var_dump($debut_reservation);

            $stmt = "SELECT DISTINCT(tables.nom) FROM tables LEFT JOIN reservations ON tables.id = reservations.id_table WHERE (reservations.id IS NULL OR reservations.debut_reservation > '2022-04-10 20:10:00' OR reservations.fin_reservation < '2022-04-10 15:00:00')
            AND tables.id NOT IN (SELECT tables.id FROM tables LEFT JOIN reservations ON tables.id = reservations.id_table WHERE reservations.debut_reservation < '2022-04-10 20:00:00' AND reservations.fin_reservation > '2022-04-10 15:00:00')
            ";

            session_start();
            
            $_SESSION['table_disponible']=$this->getData($stmt,true);
            var_dump($_SESSION['table_disponible']);
        }
      
        
       
       header("Location:?page=mes_reservations");
    }
    
}
?>