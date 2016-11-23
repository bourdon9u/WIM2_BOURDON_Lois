<?php
session_start();

if (!isset($_SESSION['count'])) {
	$_SESSION['count'] = 1;
	echo ("Bonjour visiteur, vous avez vu cette page ");
	echo($_SESSION['count']);
	echo (" fois.");
}
else {
	if($_SESSION['count'] >= 3) {
		unset($_SESSION['count']);
		echo("Session détruite");
		var_dump($_SESSION);
	}
	else{	
		$_SESSION['count']++;
		echo ("Bonjour visiteur, vous avez vu cette page ");
		echo($_SESSION['count']);
		echo (" fois.");
	}
	
}
echo '<a href="session2.php?'. SID .'">Continuer</a>';

?>

