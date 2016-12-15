<?php

require_once 'repository/trainersRepository.php';
require_once 'manager/trainerManager.php';
require_once 'form/editTrainerForm.php';

function renderListTrainers(){

    //retrieve the trainers data
    $trainers = getAllTrainers();
    
    //display it
    include 'views/listTrainersView.php';

}

function renderEditTrainer(){

    if(!isset($_GET['trainerid'])){
        echo "error on trainer id";
        //TODO display error message
    }

    //Get trainer to edit
    $trainer = getTrainerById($_GET['trainerid']);

    //check the trainer data if submitted
    if(isset($_POST['edit'])){

        $trainer = array(
            'ID' => $trainer['ID'],
            'firstName' => $_POST['firstName'],
            'lastName' => $_POST['lastName'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone']
        );

        $errors = checkEditTrainerForm($trainer);

        if(!$errors){
            //update the trainer data
            updateTrainer($trainer);

            //redirect to the planning
            //header("listeController.php");
        }
    }

    //call view
    include 'views/editTrainerView.php';

}

function renderDeleteTrainer(){

    if(!isset($_GET['trainerid'])){
        echo "error on trainer id";
        //TODO display error message
    }

    //get trainer to delete
    $trainerId = getTrainerById($_GET['trainerid']);

    if(isset($_GET['trainerid'])){
        $trainerId = $_GET['trainerid'];
        deleteTrainer($trainerId);
        echo $_GET['trainerid'];
    }
}