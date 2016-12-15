
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>PHP OSS project</title>
        
</head>
<body>
<h1>Coucou</h1>

<?php 

	echo "Execution PHP";
	$user = 'root';
	$pass = 'root';
	$dbh = new PDO('mysql:host=localhost;dbname=world', $user, $pass);

	$results = $dbh->query('
		SELECT Code,Name 
		FROM country 
		');


	$stmt = $dbh->prepare("
		INSERT INTO city (Name, CountryCode, Disctrict, Population) 
		VALUES (:name, :countrycode, :disctrict, :population)
		");
	$stmt->bindParam(':name', $name);
	$stmt->bindParam(':countrycode', $countrycode);
	$stmt->bindParam(':disctrict', $disctrict);
	$stmt->bindParam(':population', $population);
	


?>

 <form action="#" method="post">
  Name:<input type="text" name="name"></br>
  Country:<select name="country"></br>
  	<?php
  		foreach($results as $country){
  			echo '<option value="'.$country['Code'].'">'.$country['Name'].'</option>';
  		}
  	?>
  </select></br>
  District:<input type="text" name="district"></br>
  Population:<input type="number" name="population"></br>
  <input type="submit" value="Creer" name="create"></br>
</form>


<?php

if(isset($_POST['create'])){

	// si mes champs obligatoires sont rempli alors ok
	$create = TRUE;
	$mandatoryData = array('name','country','district','population');

	foreach ($mandatoryData as $data) {
		if($_POST[$data] == '') {
			$create=FALSE;
			echo "la donnée ".$data." est vide<br />";
		}
	}
		
	if($create){

		var_dump($_POST);

		echo 'create';

		$name = htmlspecialchars($_POST['name']);
		$countrycode = htmlspecialchars($_POST['country']);
		$disctrict = htmlspecialchars($_POST['district']);
		$population = intval($_POST['population']);
		$stmt->execute();

	}else{
		echo 'do not create';
	}
}


?>

</body>
</html>
