<?php
    
    function validateUser($name,$login,$psw){
        $userName  =  strip_tags($name) ;
        //$userLogin =  preg_match("/^[a-zA-Z0-9]+$/", $login);
        $userPsw   =  strip_tags($psw) ;
        $error=false;
        try{    
            //Vérifier Si les rentrés ne sont vides et bien renseignés
           if ((isset($name)&& $name=="") 
                || (isset($login)&& $login=="")
                || (isset($psw) && $psw=="")){
                             

                    throw new Exception('les champs du formulaire ne doivent pas etre vide');
                
                }
                if (!preg_match('/^[a-zA-Z0-9_-]/',$login)){
                     throw new Exception('Le login n\'est pas correct');
                
                }
        
        }
        catch (Exception $e){
             $error = $e->getMessage();
        } 
        
        return $error;
    }
  