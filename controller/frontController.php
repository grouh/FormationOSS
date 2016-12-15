<?php

    include_once 'controller/menuController.php';
    include_once 'controller/loginController.php';
    include_once 'controller/userController.php';
    include_once 'controller/signUpController.php';
    include_once 'services/authenticationService.php';
   

    function render(){

        //Anonymous controller
        if(!isUserLoggedIn()){

            if(isset($_GET['action']) && $_GET['action']=='signup'){
                //Sign up form
                return renderSignUpForm();
            }else{
                //Login form
                return renderLoginForm();
            }
        }

        //Secured routes
        if(isUserLoggedIn() && isset($_GET['action'])) {

            renderMenu();

            switch ($_GET['action']) {
                case 'planning':
                    // Display planning
                    // Edit planning
                    // Create planning
                    //renderPlanning();
                    break;
                case 'listUsers':
                    // List users
                    renderListUsers();
                    break;
                case 'editUser':
                    // Edit user
                    renderEditUser();
                    break;
            }
        }else{
            "nothing to display";
        }
    }