<h1>Carte du restaurant</h1>
<div class="Cards">
<?php 
    session_start();
    $nbre_produit_panier = !empty(array_sum($_SESSION['panier'])) ? array_sum($_SESSION['panier']) : 0 ;
?>
    <h3><a href="/?page=panier"> panier </a> </h3>
    <div class="d-flex flex-row"><p>Nombre de produit dans le panier : </p><p class="text-white">xx</p> <h5 class="text-danger"> <?= $nbre_produit_panier ?> </h5></div>
    <div class="d-flex flex-row flex-wrap justify-content-around">
    <?php foreach ($liste_produits as $produit) : ?>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?= $produit->nom?></h5>
                <p class="card-text"><?= $produit->description?></p>
                <p class="card-text"><?= $produit->prix?> €</p>
                <a href="/?page=ajout_panier&id=<?= $produit->id ?>" class="btn btn-primary">Ajouter</a>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
<div>