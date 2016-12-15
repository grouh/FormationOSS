<?php

<<<<<<< HEAD
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../form/loginForm.php';

function userIsOk($login, $password) {
    $bdd = new PDO('mysql:host=localhost; dbname=FormationOSS.sql', 'root', '');
    $result = $bdd->query('SELECT login, password FROM users WHERE login=$login and password=$password ');

    return $result->fetchAll();
=======
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
>>>>>>> f74adaf1061a93b85b390b123f74b3b20e24f4b1
}
