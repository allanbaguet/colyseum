<?php 
//appel de la fonction établie dans la page Client
require_once __DIR__ . '/../models/Client.php';



try {
    $getNumberClients = getNumberClients();
    $exercice = 3;
    $title = 'Exercice 3';
} catch (\Throwable $th) {
    $error = $th->getMessage();
    include __DIR__ . '/../views/templates/header.php';
    include __DIR__ . '/../views/templates/error_view.php';
    include __DIR__ . '/../views/templates/footer.php';
    die;
}


include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/exercices/exercice_3_view.php';
include __DIR__ . '/../views/templates/footer.php';