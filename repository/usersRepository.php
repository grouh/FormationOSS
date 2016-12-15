<?php

include "./services/sqlDriverService.php";

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
