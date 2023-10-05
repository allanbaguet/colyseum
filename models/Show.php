<?php

require __DIR__ . '/../config/connexion_BDD.php';


//exercice 6
function getShowTitle(): array
{
    $pdo = connect();
    $sql = 'SELECT `title`, `performer`, `date`, `startTime` FROM  `shows` ORDER BY `title` ASC';
    $sth = $pdo->query($sql);
    $showNames = $sth->fetchAll();
    //fetchAll retourne un tableau d'objet -> PDOStatements
    //sth -> statements handle
    return $showNames;

}