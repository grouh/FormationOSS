<?php 

	session_start();

	if(isset($_POST['login'])){

		// si mes champs obligatoires sont rempli alors ok
		$connect = TRUE;
		$mandatoryData = array('superlogin','superpassword');

		foreach ($mandatoryData as $data) {
			if($_POST[$data] == '') {
				$connect=FALSE;
				echo "la donnée ".$data." est vide<br />";
			}
		}

		if($_POST['superpassword'] != '1234') {
				$connect=FALSE;
				echo "le mot de passe est erroné<br />";
			}
			
		if($connect){

			$_SESSION['login'] = htmlspecialchars($_POST['superlogin']);
			$_SESSION['lastLogin'] = time();


		}else{
			echo ' Pas de connexion </ br>';
		}
	}

	if(isset($_POST['logout'])){
		session_destroy();
		unset($_SESSION);
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>PHP OSS project</title>
        
</head>
<body>
<h1>Coucou</h1>



<?php if (!isset($_SESSION['login'])) : ?>    

 <form action="#" method="post">
  Login:<input type="text" name="superlogin"></br>
  Pwd: <input type="password" name="superpassword"></br>
  <input type="submit" value="Login" name="login"></br>
</form>

<?php else: ?>

User information :</br>
login : <?php echo $_SESSION['login'] ?></br>
date de connexion: <?php echo $_SESSION['lastLogin'] ?></br>
<form action="#" method="post">
  <input type="submit" value="Logout" name="logout"></br>
</form>

<?php endif; ?>



</body>
</html>
