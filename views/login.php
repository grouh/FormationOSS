<?php

$alert = "";    

if (isset($_POST["login"]) && isset($_POST["password"])) {
    $login = $_POST["login"];
    $password = $_POST["password"];
    if (checkUser($login, $password)) {
       
        createSession(getUser($login));
        header("Location: showplanning.html.php");
    }
    else {
        $alert = 'login incorrect';
    }
}


?>

<html>


    <head>
        <meta charset="utf-8" />
        <title>Authentication</title>
    </head>

    <body>
        <p> Enter your login and password or         
        <a href="signUp.php">Sign Up</a>
        </p>
        <form action="login.php" method="post">
            <p> 
                Login <input type="text" name="login" /> <br />
                Password <input type="password" name="password" /> <br />
                <input type="submit" value="Log in" />
            </p>
            <p>


            </p>
        </form>
    </body>

</html>






















<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

