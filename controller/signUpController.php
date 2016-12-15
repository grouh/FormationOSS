<?php
    //include("../manager/userManager.php");
    include("../form/signUpForm.php");   
    include("../views/signUpView.php");
    
    $userName  =  isset($_POST['name']) ?: $_POST['name'] ;
    $userLogin =  isset($_POST['login']) ?: $_POST['login'];
    $userPsw   =  isset($_POST['password']) ?: $_POST['password'];
    
    $errorForm = validateUser($userName,$userLogin,$userPsw);
      
    if ($errorForm==false){
        
        //createUser($userName, $userLogin);//en attente de la fonction de creation de user
        //header('Location:../views/loginView.php');//en attente du fichier
    }
    
    else{
        include('../views/signUpView.php');
    }
    
       
    




