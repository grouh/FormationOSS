<?php

if(isset($_GET['ville'])){
	var_dump($_GET);

	$query = 'SELECT * from city WHERE Name ="' . $_GET['ville'].'"';
	//$query = 'SELECT * from city WHERE Name ="Kabul"';

	var_dump($query);

	$dsn = 'mysql:host=localhost;dbname=world';
	$user = 'root';
	$pass = 'root';
	$dbh = new PDO($dsn, $user, $pass);
	$results = $dbh->query($query);


	var_dump($results->fetch());
}


?>

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>PHP OSS project</title>
        
</head>
<body>
<h1>Coucou</h1>

<form action="#" method="post">
  Login:<input type="text" name="superlogin"></br>
  <input type="submit" value="Login" name="login"></br>
</form>

<?php

if(isset($_POST ['superlogin'])){
	
}


?>


</body>
</html>