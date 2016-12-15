<?php


require '../manager/planningManager.php';
require '../form/createPlanningForm.php';
require '../form/editPlanningForm.php';
require '../repository/planningRepository.php';



    function renderListPlanning(){
        
        $planning = getAllPlanning();
    
        //display it
        include 'views/listPlanningView.php';
    }

    function renderEditPlanning($date){
        
        if(!isset($_GET['ID'])){
        echo "error on planning id";
        //TODO display error message
    }

        //Get planning to edit
        // in repository
        $planning = getPlannning($date);

}

        //if no error; then proceed to actions
        if(!$error){
            //update the planning data
            // in managers
            updatePlanning($_POST["ID"], $_POST["Date"], $_POST["Label"], $_POST["Teacher"]);

    //Get planning to edit
    // in repository
    //$planning = getPlannning($date);

    //check the planning data if submitted
    //editPlanningForm in form elements
    //$error = checkEditPlanningForm($_POST['values']);

    //if no error; then proceed to actions
    if (!$error) {
        //update the planning data
        // in managers
        //updatePlanning($_POST['values']);

        //redirect user to the planning
        //header("listeController.php");
    }

    //Display form with planning with error
    // in views
    //$html = editPlanningView($planning,$error);

    return $html;

}


function renderCreatePlanning()
{

    $messageInfo = "";
    try {
        if (isset($_POST['createPlanning'])) {
            if (validateCreateForm()) {

                //  echo "on a validé le formulaire ";
                createPlanning($_POST["Date"], $_POST["Label"], $_POST["Teacher"]);

                $messageInfo = "Planning créé";

            } else {
                //  echo "probleme controleur ";
                //probleme
            }

        }
    }
    catch (Exception $e) {
        $messageInfo = "Exception " . $e->getMessage();
    }


    include('../views/createPlanningView.php');
}