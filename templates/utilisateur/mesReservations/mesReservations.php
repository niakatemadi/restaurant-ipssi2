<main class="container">
        <h1 class="text-center">Mes reservations</h1>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Numéro de reservation</th>
                    <th>Table</th>
                    <th>Debut de reservation</th>
                    <th>Fin de reservation</th>
                    <th>Date de reservation</th>
                    <th>Etat</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($liste_reservations as $reservation): ?>

                            <?php switch ($reservation->etat) {
                                case 'En attente':
                                    $state = "btn btn-secondary";
                                    break;
                                case 'Acceptee':
                                    $state="btn btn-success";
                                    break;
                                case 'Refusee':
                                    $state="btn btn-danger";
                                    break; }
                            ?>
                    <tr>
                        <td><?= $reservation->id ?></td>
                        <td><?= $reservation->id_table ?></td>
                        <td><?= $reservation->debut_reservation ?></td>
                        <td><?= $reservation->fin_reservation ?></td>
                        <td><?= $reservation->date_reservation ?></td>
                        <td><button type="button" class="<?=$state?>" ><?= $reservation->etat ?></button></td>      
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div>
            <h3>Reserver une table</h3>
            <form method="post" action="">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">debut de reservation</label>
                    <input type="datetime-local" name="debut_reservation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">veuillez entrer l'heure de debut de votre reservation</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Fin de reservation</label>
                    <input type="datetime-local" name="fin_reservation" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-primary"><a href="/?page=available_table&id_commande=<?= rand(100,100000) ?>">Reserver un table</a></button>
            </form>
            <h3><?php
            if(!empty($_POST['debut_reservation']) && !empty($_POST['fin_reservation']))
            {
                $debut_reservation= $_POST['debut_reservation'];
                $fin_reservation= $_POST['fin_reservation'];
                header("Location:?page=available_table&debut_reservation=$debut_reservation&fin_reservation=$fin_reservation");
               //var_dump($_POST['debut_reservation']);
            } 
            ?></h3>
            <h3>Voici les tables disponible ci-dessous :</h3> 
            <div class="d-flex justify-content-between">   
            <?php  session_start(); foreach ($_SESSION['table_disponible'] as $table) : ?>
                
                <button type="button" class="btn btn-secondary"><?= $table->nom ?></button>
                
            <?php endforeach; ?></div>
        </div>
    </main>