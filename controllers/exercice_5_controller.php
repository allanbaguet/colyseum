<?php 
require_once __DIR__ . '/../models/Client.php';



try {
    $getNameClientsAsc = displayNameClientsDesc();
    $exercice = 5;
    $title = 'Exercice 5';
} catch (\Throwable $th) {
    $error = $th->getMessage();
    include __DIR__ . '/../views/templates/header.php';
    include __DIR__ . '/../views/templates/error_view.php';
    include __DIR__ . '/../views/templates/footer.php';
    die;
}

//appel de la fonction établie dans la page Client
include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/exercices/exercice_5_view.php';
include __DIR__ . '/../views/templates/footer.php';