
   <main>

<h1 class="text-center"><?= $message_bienvenue ?></h1>
<form method="post">
    <h1> Créer un nouvel administrateur</h1>
  <div class="form-group">
    <label for="exampleInputEmail1">Nom</label>
    <input type="text" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre nom">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Prénom</label>
    <input type="text" name="prenom" class="form-control" id="exampleInputPassword1" placeholder="Entrer votre prénom">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">adresse</label>
    <input type="text" name="adresse" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre adresse">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Entrer votre Email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Ville</label>
    <input type="text" name="ville" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre Ville">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Pseudo</label>
    <input type="text" name="pseudo" class="form-control" id="exampleInputPassword1" placeholder="Entrer votre Pseudo">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Entrer votre Mot de passe">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">J'accepte les conditions d'utilisations</label>
  </div>
  <button type="submit" class="btn btn-primary">S'inscrire</button>
</form>

<?php 
  $validation = ( !empty($_POST['nom']) && !empty($_POST['pseudo']) && !empty($_POST['password']) ) ? true : false;
if($validation){

  $_nom=$_POST['nom'];
  $_pseudo=$_POST['pseudo'];
    $_email=$_POST['email'];
    $_password=$_POST['password'];
    $_ville=$_POST['ville'];
    $_adresse=$_POST['adresse'];
    $_prenom=$_POST['prenom'];

  session_start();

  header("Location:?page=create_admin&nom=$_nom&pseudo=$_pseudo&email=$_email&password=$_password&ville=$_ville&adresse=$_adresse&prenom=$_prenom");
} ?>
</main>