<?php
function additionner($a, $b) {
	if (!is_numeric($a) || !is_numeric($b)) {
		// On lance une nouvelle exception grace `a throw
		// on instancie directement un objet de la classe Exception.
		throw new Exception('Les deux parametres doivent etre des nombres');
	}
	return $a + $b;
}


echo additionner(12, 3). '<br />';
echo additionner('azerty', 54). '<br />';
?>