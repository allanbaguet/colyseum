<?php 
require_once __DIR__ . '/../models/Showtype.php';


try {
    $getShowtypes = getShowtype();
    $exercice = 2;
    $title = 'Exercice 2';
} catch (\Throwable $th) {
    $error = $th->getMessage();
    include __DIR__ . '/../views/templates/header.php';
    include __DIR__ . '/../views/templates/error_view.php';
    include __DIR__ . '/../views/templates/footer.php';
    die;
}



//appel de la fonction établie dans la page Showtype
include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/exercices/exercice_2_view.php';
include __DIR__ . '/../views/templates/footer.php';