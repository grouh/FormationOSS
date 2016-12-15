<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>PHP OSS project</title>
        
</head>
<body>
<h1>Coucou</h1>

<?php

	function isCacheAvailable(){
		return file_exists('cache/cache.html');
	}

	function getCities(){
		$user = 'root';
		$pass = 'root';

		$dbh = new PDO('mysql:host=localhost;dbname=world', $user, $pass);

		$results = $dbh->query('
			SELECT ID,Name,CountryCode 
			FROM city 
			LIMIT 10
		');

		return $results->fetchAll();
	}

	function writeHTML($cities){
		$html = '';
		foreach ($cities as $city) {
			$html .= '<li>'.$city['Name'].'</li>';
		}
		$html = '<ul>'.$html.'</ul>';

		file_put_contents('cache/cache.html',$html);
	}

	function buildCacheFile(){
		//request SQL
		$cities = getCities();

		//write HTML
		writeHTML($cities);
	}

	function renderCache(){
		//get saved cache
		return file_get_contents('cache.html');
	}

	if(isCacheAvailable()){
	
		echo 'cache';
		buildCacheFile();
	}else{
		echo 'pascache';
	}

	echo renderCache();

?>


</body>
</html>