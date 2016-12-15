<?php

    include_once 'controller/menuController.php';
    include_once 'controller/loginController.php';
    include_once 'controller/userController.php';
    include_once 'controller/trainerController.php';
    include_once 'controller/planningController.php';
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
                case 'createPlanning':
                    renderCreatePlanning();
                    break;
                case 'listPlanning':
                    renderCreatePlanning();
                    break;
                case 'editPlanning':
                    renderEditPlanning();
                    break;
                case 'listUsers':
                    // List users
                    renderListUsers();
                    break;
                case 'listTrainers':
                    // List trainers
                    renderListTrainers();
                    break;
                case 'editUser':
                    // Edit user
                    renderEditUser();
                    break;
                case 'deleteUser':
                    //Delete user
                    renderDeleteUser();
            }
        }else{
            return "nothing to display";
        }
    }