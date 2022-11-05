<table class="commandes__commande">
<?php 
    session_start();
?>
            <p><a href="/?page=toutlesproduits">Retour</a></p>
            <h4>Panier</h4>
            <tr>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Quantité</th>
            </tr>
            <?php foreach ($_SESSION['info_produits'] as $produit) : ?>
                <tr>
                    <td><?= $produit -> nom ?></td>
                    <td><?= $produit -> prix ?></td>
                    <td><?= $produit -> categorie ?></td>
                    <td><?= $_SESSION['panier'][$produit->id] ?></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td>Total</td>
            </tr>
</table>