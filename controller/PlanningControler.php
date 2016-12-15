<?php

require '../manager/planningManager.php';
require '../form/createPlanningForm.php';




if(validateCreateForm()){

  //  echo "on a validé le formulaire ";
    createPlanning($_POST["Date"], $_POST["Label"], $_POST["Teacher"]);
   // echo "on a fait le createPlanning ";
}

else{
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
