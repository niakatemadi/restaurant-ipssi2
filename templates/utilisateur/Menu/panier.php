<table class="commandes__commande">
<?php 
    session_start();

    if(isset($_GET['del']))
    {  
        foreach($_SESSION['info_produits'] as $key_produit => $produit)
        {
            if(($produit->id)==$_GET['del'] )
            {
                unset($_SESSION['info_produits'][$key_produit]);
                unset($_SESSION['panier'][$produit->id]);
            }
        }
    }
        $total =0;
        foreach($_SESSION['info_produits'] as $produit)
        {
             $total = $total + floatval($_SESSION['panier'][$produit->id]*$produit->prix);
        }
    
?>
            <p><a href="/?page=toutlesproduits">Retour</a></p>
            <h4>Panier</h4>
            <tr>
                <th>Nom</th>
                <th>Prix</th>
                <th>Catégorie</th>
                <th>Quantité</th>
                <th>Action</th>
            </tr>
            
            <?php foreach ($_SESSION['info_produits'] as $produit) : ?>
                <tr>
                    <td><?= $produit -> nom ?></td>
                    <td><?= $produit -> prix ?>€</td>
                    <td class="text-center"><?= $produit -> categorie ?></td>
                    <td class="text-center"><?= $_SESSION['panier'][$produit->id] ?></td>
                    <td class="text-center">
                        <button type="button" class="btn btn-danger">
                            <a href="/?page=panier&del=<?= $produit->id ?>" class="link-light">Supprimer</a>
                        </button>
                    </td>
                </tr>
            <?php endforeach; ?>
            <tr><td> <?= $total ? 'Total: '.$total.' €' : 'Votre panier est vide' ?></td></tr>
            <tr>
                <td>
                <button type="button" class="btn btn-primary btn-lg btn-block">
                        <a href="/?page=send_commande&id_commande=<?= rand(100,100000) ?>" class="link-light">Commander</a>
                </button>
            </td>
            </tr>
</table>