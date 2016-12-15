<?php

   include "../repository/showPlanningRepository.php";  
   
    /**
     * retrieve the planning from table Planning
     */    
    function renderPlanning(){
        
        $dataPlanning=getPlanningData(); 
    
        if($dataPlanning['erreurs']== false){
            $outputData=$dataPlanning['res'];
            include "../views/showPlanningView.php";
        }
        else{
            $error=$dataPlanning["errors"];
             include "Location: ../views/errorViews.php";
        }          
    }
    
    renderPlanning();


?>

