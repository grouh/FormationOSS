<?php

require_once "./services/sqlDriverService.php";

function updateTrainer($trainer) {

    var_dump($trainer);

    $dbh = getDatabaseConnection();

    $sql = "UPDATE trainers 
            SET 
                firstName = :firstName, 
                lastName = :lastName,  
                email = :email,  
                phone = :phone
                
            WHERE ID = :id ";

    $stmt = $dbh->prepare($sql);

    $stmt->bindValue(':firstName', $trainer['firstName'],PDO::PARAM_STR);
    $stmt->bindValue(':lastName', $trainer['lastName'],PDO::PARAM_STR);
    $stmt->bindValue(':email', $trainer['email'],PDO::PARAM_STR);
    $stmt->bindValue(':phone', $trainer['phone'],PDO::PARAM_STR);
    $stmt->bindParam(':id', $trainer['ID']);

    return $stmt->execute();
}