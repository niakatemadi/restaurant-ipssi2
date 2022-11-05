
    <main class="container">
        <h1 class="text-center">Nos utilisateurs</h1>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>Telephone</th>
                    <th>Ville</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($utilisateurs as $utilisateur): ?>
                    <tr>
                        <td><?= $utilisateur->prenom ?></td>
                        <td><?= $utilisateur->nom ?></td>
                        <td><?= $utilisateur->adresse ?></td>
                        <td><?= $utilisateur->telephone ?></td>
                        <td><?= $utilisateur->ville ?></td>
                        <td><?= $utilisateur->email ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>