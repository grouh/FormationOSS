<?php
/**
 * Created by PhpStorm.
 * User: Marc
 * Date: 14/12/16
 * Time: 14:06
 */

// createPlanning
//if (isset($_POST["createPlanning"])) {

function validateCreateForm(){

   // echo "debut validateCreateForm ";
   if( isset($_POST["Date"])&& isset($_POST["Label"]) &&   isset($_POST["Teacher"])){
        if(!isint($_POST(""))){
            throw new Exception("La date doit être au format numerique!");
        }


        return true;

   }

   else{
       throw new Exception("probleme de validation de formulaire");
   }
}



/*
function validateCreateForm($Date, $Label, $Teacher){
    if (isset($Date) && isset($Label) && isset($Teacher)) {

        return true;
    }
    else{
        return false;
    }
}*/
//}