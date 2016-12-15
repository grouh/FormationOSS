<?php


require '../manager/planningManager.php';
require '../form/createPlanningForm.php';
require '../repository/planningRepository.php';


    function renderListPlanning(){

    }

    function renderEditPlanning($date){

        //Get planning to edit
        // in repository
        $planning = getPlannning($date);

        //check the planning data if submitted
        //editPlanningForm in form elements
        //$error = checkEditPlanningForm($_POST['values']);

        //if no error; then proceed to actions
        if(!$error){
            //update the planning data
            // in managers
            updatePlanning($_POST["Id"], $_POST["Date"], $_POST["Label"], $_POST["Teacher"]);

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


    if (validateCreateForm()) {

        //  echo "on a validé le formulaire ";
        createPlanning($_POST["Date"], $_POST["Label"], $_POST["Teacher"]);
        // echo "on a fait le createPlanning ";
    } else {
        //  echo "probleme controleur ";
        //probleme
    }

    /*if (isset($_POST["Date"])&& isset($_POST["Label"]) &&   isset($_POST["Teacher"])) {

        if (validateCreateForm($_POST["Date"], $_POST["Label"], $_POST["Teacher"])) {
            $date = $_POST["Date"];
            $label = $_POST["Label"];
            $teacher = $_POST["Teacher"];
            createPlanning($date, $label, $teacher);
        } else {
            //probleme
        }
    }*/


    include('../views/createPlanningView.php');
}