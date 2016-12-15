<?php


/**
 * Créer un nouveau planning
 * @param date $date
 * @param string $cours
 * @param string $nameTeacher
 */
function createPlanning($date, $cours, $nameTeacher) {
    echo "debut createPlanning DB ";
    try {
        $dsn = 'mysql:host=localhost;dbname=FormationOSS';
        $user = 'root';
        $pass = 'root';
        $dbh = new PDO($dsn, $user, $pass);
        $query = $dbh->prepare(""
            . " INSERT INTO PLANNING "
            . " VALUES ( " . $date . ", " . $cours . ", " . $nameTeacher . ");");
        echo $query;

        //$query->execute();


    }


    catch(Exception $e) {
        //excep
        echo "base pas encore présente ";
    }

}

