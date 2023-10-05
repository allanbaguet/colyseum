<div class="container-fluid day">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 text-center my-5">
            <h1 class="text-white">Bases de données</h1>
            <h2 class="text-white">Exercice 4</h2>
            <p class="fs-5 my-4 text-white">N'afficher que les clients possédant une carte de fidélité.</p>
            <table class="table table-hover table-warning">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Date de naissance</th>
                        <th scope="col">Carte</th>
                        <th scope="col">Numéro de carte</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($getFidelityCard as $client) { ?>
                    <tr class="table-info">
                        <td><?php echo $client->id ?></td>
                        <td><?php echo $client->lastName?></td>
                        <td><?php echo $client->firstName?></td>
                        <td><?php echo $client->birthDate?></td>
                        <td><?php echo $client->card?></td>
                        <td><?php echo $client->cardNumber?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>