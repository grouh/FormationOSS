<?php
    
    /**
     * Return the planning of the date 
     * @param int $date
     * @return Date, label and teacher
     */
    function getPlanning($date){
        
        $bdh = new PDO('mysql:host=localhost; dbname=FormationOSS', 'root', 'root');
        
        $results = $dbh -> query("SELECT * FROM planning WHERE date='.$date.'");
        
        return $results;
    }