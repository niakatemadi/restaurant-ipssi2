<?php
namespace src\Model;
use Core\Database\Database;
require_once ROOT."/Core/Database/database.php";
class CreateInscriptionModel extends Database{

    public function sendInscription()
    {
        
        var_dump($_GET['prenom']);
        var_dump($_GET['adresse']);
        var_dump($_GET['ville']);
        var_dump($_GET['email']);
        var_dump($_GET['password']);
        var_dump($_GET['pseudo']);
        var_dump($_GET['nom']);

        $nom = $_GET['nom'];
        $prenom= $_GET['prenom'];
        $adresse=$_GET['adresse'];
        $ville=$_GET['ville'];
        $email=$_GET['email'];
        $password=$_GET['password'];
        $pseudo=$_GET['pseudo'];



        $stmt = "INSERT INTO utilisateurs (nom, prenom, adresse, telephone, ville, email, password) VALUES ('$nom', '$prenom','$adresse',0745845878, '$ville', '$email', '$password')";
        
        $this->postData($stmt,true);

        //header("Location:?page=connexion");

        
        
    }

}
?>