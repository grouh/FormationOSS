<?php

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
}
