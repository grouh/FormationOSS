<?php

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