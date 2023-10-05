<?php 
require_once __DIR__ . '/../models/Show.php';


try {
    $getShowTitles = getShowTitle();
    $exercice = 6;
    $title = 'Exercice 6';
} catch (\Throwable $th) {
    $error = $th->getMessage();
    include __DIR__ . '/../views/templates/header.php';
    include __DIR__ . '/../views/templates/error_view.php';
    include __DIR__ . '/../views/templates/footer.php';
    die;
}



//appel de la fonction établie dans la page Showtype
include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/exercices/exercice_6_view.php';
include __DIR__ . '/../views/templates/footer.php';