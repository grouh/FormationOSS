<?php

    include_once 'controller/loginController.php';
    include_once 'services/authenticationService.php';

    function render(){

        echo "render";
        
        //Anonymous controller
        if(!isUserLoggedIn()){

            if(isset($_GET['action']) && $_GET['action']=='signup'){
                //Sign up form
                //return renderSignUpForm();
            }else{
                //Login form
                return renderLoginForm();
            }
        }

        //Secured routes
        if(isUserLoggedIn()) {
            switch ($_GET['action']) {
                case 'planning':
                    // Display planning
                    // Edit planning
                    // Create planning
                    //renderPlanning();
                case 'listUsers':
                    // List users
                    //renderListUsers();
                case 'editUser':
                    // Edit user
                    //renderEditUser();
            }
        }
    }