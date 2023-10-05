<?php 
require_once __DIR__ . '/../models/Client.php';


try {
    $get_clients_info = getClients();
    $exercice = 1;
    $title = 'Exercice 1';
} catch (\Throwable $th) {
    $error = $th->getMessage();
    include __DIR__ . '/../views/templates/header.php';
    include __DIR__ . '/../views/templates/error_view.php';
    include __DIR__ . '/../views/templates/footer.php';
    die;
}




//appel de la fonction établie dans la page Client
include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/exercices/exercice_1_view.php';
include __DIR__ . '/../views/templates/footer.php';