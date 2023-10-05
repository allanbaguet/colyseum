<?php

require __DIR__ . '/../config/connexion_BDD.php';


//exercice 1
function getClients(): array
{
    $pdo = connect();
    $sql = 'SELECT * FROM `clients`';
    $sth = $pdo->query($sql);
    $clients = $sth->fetchAll();
    //sth -> statements handle
    return $clients;
}

//exercice 3
function getNumberClients(): array
{
    $pdo = connect();
    $sql = 'SELECT * FROM `clients` LIMIT 20;';
    $sth = $pdo->query($sql);
    $clients = $sth->fetchAll();
    //sth -> statements handle
    return $clients;
}

//exercice 4
function getFidelityCard(): array
{
    $pdo = connect();
    $sql = 'SELECT * FROM `clients` INNER JOIN `cards` ON `clients`.`cardNumber` = `cards`.`cardNumber` WHERE `cardTypesId` = 1;';
    $sth = $pdo->query($sql);
    $clients = $sth->fetchAll();
    //sth -> statements handle
    return $clients;
}

//exercice 5
function displayNameClientsDesc(): array
{
    $pdo = connect();
    $sql = 'SELECT `lastName`, `firstName` FROM  `clients` WHERE `lastName` LIKE "M%" ORDER BY `lastName`;';
    $sth = $pdo->query($sql);
    $clients = $sth->fetchAll();
    //sth -> statements handle
    return $clients;
}

//exercice 7
function displayInfoClients(): array
{
    $pdo = connect();
    // $sql = 'SELECT `lastName`,`firstName`,`birthDate`,`card`, `cards`.`cardNumber`, `cards`.`cardTypesId` 
    // FROM `clients`
    // LEFT JOIN `cards` ON `clients`.`cardNumber` = `cards`.`cardNumber`;';
    $sql = 'SELECT `lastName`,`firstName`,`birthDate`,`card`, `cards`.`cardNumber`, `cards`.`cardTypesId`, 
    IF (`cards`.`cardTypesId` = 1, \'oui\', \'non\') AS `fidelity`
    FROM `clients`
    LEFT JOIN `cards` ON `clients`.`cardNumber` = `cards`.`cardNumber`;';
    $sth = $pdo->query($sql);
    $clients = $sth->fetchAll();
    //sth -> statements handle
    return $clients;
}