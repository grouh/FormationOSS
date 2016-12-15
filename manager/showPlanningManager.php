<?php



/**
 * by default user's role is USER 
 * if the variable $_SESSION['login'] exists, get the role using getRoleByLogin($login)
 * @return string $role
 */
function getRole(){
    $role="USER";
    if(isset($_SESSION)){
        $login=$_SESSION['login'];
        $role=getRoleByLogin($login);        
    }     
   return $role;
}

?>