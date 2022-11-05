<h1>Carte du restaurant</h1>
<div class="Cards">
<?php 
    session_start();
?>
    <p><a href="/?page=panier"> panier </a> <h5><?= array_sum($_SESSION['panier']) ?></h5></p>
    <p><a > produits: </a> <h5><?= var_dump($_SESSION['panier']) ?></h5></p>
    <?php foreach ($liste_produits as $produit) : ?>
        <div class="Cards__produit">
            <p><?= $produit->categorie?></p>
            <p><?= $produit->nom?></p>
            <p><?= $produit->description?></p>
            <p><?= $produit->prix?> €</p>
            <button><a href="/?page=ajout_panier&id=<?= $produit->id ?>" >Ajouter</a></button>
        </div>
        <p>--------------------------------</p> 
    <?php endforeach; ?>
<div>