<?php 
require_once __DIR__ . '/../models/Client.php';


try {
    $getInfoClients = displayInfoClients();
    $exercice = 7;
    $title = 'Exercice 7';
} catch (\Throwable $th) {
    $error = $th->getMessage();
    include __DIR__ . '/../views/templates/header.php';
    include __DIR__ . '/../views/templates/error_view.php';
    include __DIR__ . '/../views/templates/footer.php';
    die;
}



//appel de la fonction établie dans la page Showtype
include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/exercices/exercice_7_view.php';
include __DIR__ . '/../views/templates/footer.php';