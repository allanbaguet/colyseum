<?php

require_once __DIR__ . '/../config/connexion_BDD.php';


//exercice 2
function getShowtype(): array
{
    $pdo = connect();
    $sql = 'SELECT `type` FROM `showtypes`;';
    $sth = $pdo->query($sql);
    $showtypes = $sth->fetchAll();
    //fetchAll retourne un tableau d'objet -> PDOStatements
    //sth -> statements handle
    return $showtypes;

}
