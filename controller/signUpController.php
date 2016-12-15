<?php
    //include("../manager/userManager.php");
    include("../form/signUpForm.php");   
    include("../views/signUpView.php");
    
    if(isset($_POST['name'])){ $userName  =  $_POST['name'] ;}
    if(isset($_POST['login'])){  $userLogin =  $_POST['login'];}
    if(isset($_POST['password'])){ $userPsw   = $_POST['password'];}
    
    $errorForm = validateUser($userName,$userLogin,$userPsw);
      
    if ($errorForm==false){
        
        //createUser($userName, $userLogin);//en attente de la fonction de creation de user
        //header('Location:../views/loginView.php');//en attente du fichier
    }
    
    else{
        include('../views/signUpView.php');
    }
    
       
    




