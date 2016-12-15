<?php

include "./services/sqlDriverService.php";

function userIsOk($login, $password)
{
    $bdd = new PDO('mysql:host=localhost; dbname=FormationOSS.sql', 'root', '');
    $result = $bdd->query('SELECT login, password FROM users WHERE login=$login and password=$password ');

    return $result->fetchAll();
}



function getAllUsers() {

    $dbh = getDatabaseConnection();

    $results = $dbh->query('SELECT * FROM users');

    return $results->fetchAll();
}

function getUserById($id) {

    $dbh = getDatabaseConnection();

    $results = $dbh->query('SELECT * FROM users WHERE ID='.intval($id));

    return $results->fetch();

}
