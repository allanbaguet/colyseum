<div class="container-fluid morning">
    <div class="row">
    <div class="col-3"></div>
        <div class="col-6 text-center my-5">
            <h1 class="text-white">Bases de données</h1>
            <h2 class="text-white">Exercice 2</h2>
            <p class="fs-5 my-4 text-white">Afficher tous les types de spectacles possibles.</p>
            <table class="table table-hover table-warning table-bordered">
                <thead>
                    <tr>
                        <th scope="col">type</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($getShowtypes as $showtype) { ?>
                    <tr class="table-info">
                        <td><?php echo $showtype->type?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>