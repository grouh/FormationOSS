<?php


require '../manager/planningManager.php';
require '../form/createPlanningForm.php';
require '../form/editPlanningForm.php';
require '../repository/planningRepository.php';


    function renderListPlanning(){
        
        $planning = getAllPlanning();
    
        include './views/listPlanningView.php';
    }

    function renderEditPlanning(){
        
        if(!isset($_GET['id'])){
            echo "error on planning id";
        }

        $planning = getPlannningById($_GET['ID']);
        
        if(isset($_POST['edit'])){

        $planning = array(
            'ID' => $_GET['id'],
            'Date' => $_POST['Date'],
            'Label' => $_POST['Label'],
            'Teacher' => $_POST['Teacher']
        );    

        $error = checkEditPlanningForm($planning);
        
        if(!$error){
            
            updatePlanning($_GET["id"], $_POST["Date"], $_POST["Label"], $_POST["Teacher"]);
        }

        include './views/editPlanningView.php';
    
    }

}


function renderCreatePlanning()
{

    $messageInfo = "";
    try {
        if (isset($_POST['createPlanning'])) {
            if (validateCreateForm()) {

                createPlanning($_POST["Date"], $_POST["Label"], $_POST["Teacher"]);

                $messageInfo = "Planning créé";
                //a confirmer
                header("Location: /routing/frontController.php");
            }
        }
    }
    catch (Exception $e) {
        $messageInfo = "Exception " . $e->getMessage();
    }


    include('./views/createPlanningView.php');
}