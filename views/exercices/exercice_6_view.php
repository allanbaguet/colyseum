<div class="container-fluid afternoon">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 text-center my-5">
            <h1 class="text-white">Bases de données</h1>
            <h2 class="text-white">Exercice 6</h2>
            <p class="fs-5 my-4 text-white">Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par ordre alphabétique. Afficher les résultat comme ceci : Spectacle par artiste, le {date} à {heure}.</p>
            <table class="table table-hover table-warning table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Titre</th>
                        <th scope="col">Artiste</th>
                        <th scope="col">Date</th>
                        <th scope="col">Heure</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($getShowTitles as $showTitle) {
                        $date = new DateTimeImmutable($showTitle->date);
                        $dateFormatted = $date->format('d/m/Y');
                    ?>
                        <tr class="table-info">
                            <td><?php echo $showTitle->title ?></td>
                            <td><?php echo $showTitle->performer ?></td>
                            <td><?php echo $dateFormatted ?></td>
                            <td><?php echo $showTitle->startTime ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>