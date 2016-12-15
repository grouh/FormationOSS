<?php
<<<<<<< HEAD

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../views/sessionManager.php';
include '../form/loginForm.php';



//si le formulaire est soumis, je verifie les erreurs > form ==> check_form()
//affiche le formulaire avec les erreurs si il y en a > view ==> display_errors()
//si pas d'erreur > appel manager session , puis redirection vers leplanning


$error = check_form($_POST["login"], $_POST["password"]);

if (!$error) {

    $login = $_POST["login"];
    $password = $_POST["password"];

    createSession($login, $password);
}

require_once '../views/loginView.php';




=======
    function renderLoginForm(){
        return "this is the login form";
    }
>>>>>>> f74adaf1061a93b85b390b123f74b3b20e24f4b1
