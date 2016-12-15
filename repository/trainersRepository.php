<?php

<<<<<<< HEAD
require_once "services/sqlDriverService.php";
=======
require_once "./services/sqlDriverService.php";
>>>>>>> 443192adf3f18bc95228c02e45618cacdf1c224b

function getAllTrainers() {

    $dbh = getDatabaseConnection();

    $results = $dbh->query('SELECT * FROM trainers');

    return $results->fetchAll();
}

function getTrainerById($id) {

    $dbh = getDatabaseConnection();

    $results = $dbh->query('SELECT * FROM trainers WHERE ID='.intval($id));

    return $results->fetch();
}

