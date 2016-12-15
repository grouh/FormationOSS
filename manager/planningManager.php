<?php

include '../services/sqlDriverService.php';
/**
 * Make an update of the formation ine the database
 * @param int $date
 * @param text $label
 * @param text $teacher
 */
function updatePlanning($date, $label, $teacher){
    
    $bdh = new PDO('mysql:host=localhost; dbname=FormationOSS','root','root');
    
    $result= $bdh -> query("UPDATE planning SET label='.$label.', teach='.$teacher.' WHERE date='.$date.'");    
}


/**
 * Delete a formation in the database
 * @param int $date
 */
function deletePlanning($date){
    
    $bdh = new PDO('mysql:host=localhost; dbname=FormationOSS','root','root');
    
    $result= $bdh -> query("DELETE FROM planning WHERE date='.$date.'");
}


/**
 * Créer un nouveau planning
 * @param date $date
 * @param string $cours
 * @param string $teacher
 */
function createPlanning($date, $cours, $teacher) {

    try {
        $dbh = getDatabaseConnection();
        $sql = " INSERT INTO planning (date, label, teach) VALUES ( " . $date . ", '" . $cours . "', '" . $teacher . "')";

        $query = $dbh->query($sql);
    }

    catch(Exception $e) {
        throw  new Exception("Error create in base ");
    }

}


