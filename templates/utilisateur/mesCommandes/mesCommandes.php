<table class="table table-striped table-hover" class="commandes">
    <h1>Mes commandes</h1>
        
    <?php foreach ($liste_commandes as $id_commande => $commande) : ?>
        <table class="commandes__commande">
        <h4 class="text-dark text-center">Commande numéro : <?= $id_commande?></h4>
            <?php foreach ($commande as $produit) : ?>

                <?php switch ($produit->status) {
                                case 'En cours':
                                    $state = "btn btn-secondary";
                                    break;
                                case 'Acceptee':
                                    $state="btn btn-success";
                                    break;
                                case 'Refusee':
                                    $state="btn btn-danger";
                                    break; }
                            ?>


                <table class="table table-hover">
                <thead >
                    <tr class="table-info">
                    <th scope="col">Nom</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Catégorie</th>
                    <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-active">
                    <td><?= $produit -> nom ?></td>
                    <td><?= $produit -> prix ?>€</td>
                    <td><?= $produit -> categorie ?></td>
                    <td><button type="button" class="<?=$state?>" ><?= $produit->status ?></button></td>
                    </tr>
                </tbody>
                </table>
            <?php endforeach; ?>
        </table>
    <?php endforeach; ?>
           
</table>
  