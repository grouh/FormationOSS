<?php

require_once "./services/sqlDriverService.php";

function updateUser($user) {

    var_dump($user);

    $dbh = getDatabaseConnection();

    $sql = "UPDATE users 
            SET 
                role = :role, 
                firstName = :firstName, 
                lastName = :lastName,  
                email = :email,  
                phone = :phone
                
            WHERE ID = :id ";

    $stmt = $dbh->prepare($sql);

    $stmt->bindValue(':role', $user['role'],PDO::PARAM_STR);
    $stmt->bindValue(':firstName', $user['firstName'],PDO::PARAM_STR);
    $stmt->bindValue(':lastName', $user['lastName'],PDO::PARAM_STR);
    $stmt->bindValue(':email', $user['email'],PDO::PARAM_STR);
    $stmt->bindValue(':phone', $user['phone'],PDO::PARAM_STR);
    $stmt->bindParam(':id', $user['ID']);

    return $stmt->execute();
}

function deleteUser($userId){

    $dbh = getDatabaseConnection();

    $sql = "DELETE FROM users
            WHERE ID = $userId";

    $stmt = $dbh->prepare($sql);

    return $stmt->execute();

}