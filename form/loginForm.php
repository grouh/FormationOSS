<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function check_form($login, $password) {

    if (isset($login) && isset($password)) {
        
        
        return FALSE;
        
    } else {


        return 'login incorrect please try again or sign-up';
    }
}

      