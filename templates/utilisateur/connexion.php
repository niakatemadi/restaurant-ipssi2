<main>

<h1 class="text-center"><?= $message_bienvenue ?></h1>
<form method="post" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="pseudo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre pseudo">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Entrer votre mot de passe">
    <small id="emailHelp" class="form-text text-muted"><p class="text-danger">N'oubliez pas. Votre mot de passe doit etre confidentiel !</p></small>
  </div>
  <button type="submit" class="btn btn-primary">Se connecter</button>
</form>

<?php 
$pseudo = !empty($_POST['pseudo']) ? $_POST['pseudo'] : '';
$password = !empty($_POST['password']) ? $_POST['password'] : '';

if(!empty($pseudo) && !empty($password) )
        {
            header("Location:?page=se_connecter&pseudo=$pseudo&password=$password");
        }

/*
if($pseudo=='madi' && $password=='madi' )
        {
            header("Location:?page=toutlesproduits");
        }*/
?>
</main>