<table class="table table-striped table-hover" class="commandes">
    <h1>Mes commandes</h1>
        
    <?php foreach ($liste_commandes as $id_commande => $commande) : ?>
        <table class="commandes__commande">
            <h4>Commande numéro : <?= $id_commande?></h4>
            <tr>
                <th>Nom</th>
                <th>Prix</th>
                <th>Catégorie</th>
                <th>status</th>
            </tr>
            <?php foreach ($commande as $produit) : ?>
                <tr>
                    <td><?= $produit -> nom ?></td>
                    <td><?= $produit -> prix ?></td>
                    <td><?= $produit -> categorie ?></td>
                    <td><?= $produit -> status ?></td>

                </tr>
            <?php endforeach; ?>
        </table>
    <?php endforeach; ?>
           
</table>
  