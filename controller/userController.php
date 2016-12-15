<?php

include 'repository/usersRepository.php';
include 'manager/userManager.php';
include 'form/editUserForm.php';

function renderListUsers(){

    //retrieve the users data
    $users = getAllUsers();
    
    //display it
    include 'views/listUsersView.php';

}

function renderEditUser(){

    if(!isset($_GET['userid'])){
        echo "error on user id";
        //TODO display error message
    }

    //Get user to edit
    $user = getUserById($_GET['userid']);

    //check the planning data if submitted
    if(isset($_POST['edit'])){

        $user = array(
            'ID' => $user['ID'],
            'login' => $user['login'],
            'role' => $_POST['role'],
            'firstName' => $_POST['firstName'],
            'lastName' => $_POST['lastName'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone']
        );

        $errors = checkEditUserForm($user);

        if(!$errors){
            //update the planning data
            updateUser($user);

            //redirect user to the planning
            //header("listeController.php");
        }
    }

    //call view
    include 'views/editUserView.php';

}