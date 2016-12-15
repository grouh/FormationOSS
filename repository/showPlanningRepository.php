<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//include_once "../services/sqlDriverService.php";
define('DSN',"mysql:host=localhost;dbname=FormationOSS");
define('USER','root');
define('PASS','');

/**
 * get all rows from the table planning
 * @return array 
 */
function getPlanningData(){ 
    $error=False;
    $result=NULL;
    $data=['res'=>'','erreurs'=>''];
    try{
        $db = new PDO(DSN, USER, PASS);
        //$db= getDatabaseConnection();
        $result=$db->query("SELECT * FROM planning");   
        $data['res']=$result->fetchAll();  
    }
    catch(Exception $e){
        $error=$e->getMessage();
        $data['erreurs']=$error;
    }  
    return $data;
}

/**
 * get the role of a user from the table 'users' by passing the login 
 * @param string $login
 * @return array
 */
function getRoleByLogin($login){
     $db = new PDO(DSN, USER, PASS);
     $rq="SELECT role FROM users where login = '$login'";
     $result=$db->query($rq); 
     return $result->fetch();
}
?>
