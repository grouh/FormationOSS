<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function check_form($login, $password) {


    
    $error=FALSE;
    
    if($login=="" || $password==""){
        
        $error= "il faut remplir les champs";
        
    }
    
    if (!userIsOK($login, $password)) {
        $error="les identifiants ne sont pas corrects";
    }
    return $error;
}

      