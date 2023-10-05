<div class="container-fluid night">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 text-center my-5">
            <h1 class="text-white">Bases de données</h1>
            <h2 class="text-white">Exercice 7</h2>
            <p class="fs-5 my-4 text-white">Afficher tous les clients comme ceci :</p>
                <p class="text-white">Nom : Nom de famille du client</p>
                <p class="text-white">Prénom : Prénom du client</p>
                <p class="text-white">Date de naissance : Date de naissance du client</p>
                <p class="text-white">Carte de fidélité : Oui (Si le client en possède une) ou Non (s'il n'en possède pas)</p>
                <p class="text-white">Numéro de carte : Numéro de la carte fidélité du client s'il en possède une.</p>
            <table class="table table-hover table-warning table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Date de naissance</th>
                        <th scope="col">Carte</th>
                        <th scope="col">Carte</th>
                        <th scope="col">Numéro de carte</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($getInfoClients as $infoClient) {
                        $date = new DateTimeImmutable($infoClient->birthDate);
                        $dateFormatted = $date->format('d/m/Y');
                    ?>
                        <tr class="table-info">
                            <td><?php echo $infoClient->lastName ?></td>
                            <td><?php echo $infoClient->firstName ?></td>
                            <td><?php echo $dateFormatted ?></td>
                            <td><?php echo $infoClient->fidelity ?></td>
                            <td><?php echo ($infoClient->cardTypesId == 1) ? 'Oui' : 'Non'?></td>
                            <td><?php echo ($infoClient->cardTypesId == 1) ? $infoClient->cardNumber : '' ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>