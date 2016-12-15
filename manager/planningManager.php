<?php

include '../services/sqlDriverService.php';
/**
 * Make an update of the formation ine the database
 * @param int $date
 * @param text $label
 * @param text $teacher
 */
function updatePlanning($id, $date, $label, $teacher){
    
    $bdh = new PDO('mysql:host=localhost; dbname=FormationOSS','root','root');
    
    $result= $bdh -> query("UPDATE planning SET Date='.$date.', label='.$label.', teach='.$teacher.' WHERE ID='.$id.'");    
}


/**
 * Delete a formation in the database
 * @param int $date
 */
function deletePlanning($id){
    
    $bdh = new PDO('mysql:host=localhost; dbname=FormationOSS','root','root');
    
    $result= $bdh -> query("DELETE FROM planning WHERE ID='.$id.'");
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


