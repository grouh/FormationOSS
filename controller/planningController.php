<?php

    function renderListPlanning(){

    }

    function renderEditPlanning($date){

        //Get planning to edit
        // in repository
        //$planning = getPlannning($date);

        //check the planning data if submitted
        //editPlanningForm in form elements
        //$error = checkEditPlanningForm($_POST['values']);

        //if no error; then proceed to actions
        if(!$error){
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