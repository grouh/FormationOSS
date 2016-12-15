
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>PHP OSS project</title>
        
</head>
<body>
<h1>Coucou</h1>
<?php 

	var_dump($_GET);
	echo "Execution PHP";
	$user = 'root';
	$pass = 'root';

	$dbh = new PDO('mysql:host=localhost;dbname=world', $user, $pass);

	$results = $dbh->query('
		SELECT ID,Name,CountryCode 
		FROM city 
		LIMIT 5
		');
	
	print_r($results);
	
	foreach($results as $city){
		echo '</br>';
		var_dump($city);
	}

	echo '</br>';
	echo '</br>';
/*
	$singleCity = $dbh->query('SELECT ID,Name,CountryCode FROM city WHERE ID=2');
	foreach($singleCity->fetch() as $city){
                echo '</br>';
                var_dump($city);
        }


	$singleCity = $dbh->query('UPDATE city SET Name="Quandahar 2" WHERE ID=2');

	$singleCity = $dbh->query('SELECT ID,Name,CountryCode FROM city WHERE ID=2');

        foreach($singleCity->fetch() as $city){
                echo '</br>';
                var_dump($city);
        }
*/

    //$singleCity = $dbh->query('INSERT INTO city (Name, CountryCode, Disctrict, Population) VALUES("sypam","AFG","quartier",10000)');
	var_dump($dbh->lastInsertId());

	$singleCity = $dbh->query('SELECT ID,Name,CountryCode FROM city WHERE Name="sypam"');

        foreach($singleCity->fetch() as $city){
                echo '</br>';
                var_dump($city);
        }


?>

</body>
</html>
