<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once './manager/sessionManager.php';
require_once './form/loginForm.php';

//si le formulaire est soumis, je verifie les erreurs > form ==> check_form()
//affiche le formulaire avec les erreurs si il y en a > view ==> display_errors()
//si pas d'erreur > appel manager session , puis redirection vers leplanning

function renderLoginForm() {
    
    $error = check_form($_POST["login"], $_POST["password"]);

    if (!$error) {

        $login = $_POST["login"];
        $password = $_POST["password"];

        createSession($login, $password);
    }
    include './views/loginView.php';
}

