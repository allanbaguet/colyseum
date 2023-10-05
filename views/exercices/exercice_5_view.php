<div class="container-fluid afternoon">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 text-center my-5">
            <h1 class="text-white">Bases de données</h1>
            <h2 class="text-white">Exercice 5</h2>
            <p class="fs-5 my-4 text-white">Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M".Les afficher comme ceci :
                <p class="fs-5 text-white">Nom : Nom du client</p>
                <p class="fs-5 text-white">Prénom : Prénom du client</p>
                <p class="fs-5 text-white">Trier les noms par ordre alphabétique.</p></p>
            <table class="table table-hover table-warning">
                <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($getNameClientsAsc as $client) { ?>
                    <tr class="table-info">
                        <td><?php echo $client->lastName?></td>
                        <td><?php echo $client->firstName?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>