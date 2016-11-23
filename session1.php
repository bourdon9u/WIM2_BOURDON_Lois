<?php

include 'session_pdo.php';
session_start();


if (!isset($_SESSION['count'])) {
	$_SESSION['count'] = 0;
	var_dump($_SESSION);
}
 else {
	if ($_SESSION['count'] == 2){
			var_dump(session_id());
	}
	if ($_SESSION['count'] == 3){
		unset($_SESSION['count']);
	}
	else {
		$_SESSION['count']++;
		var_dump($_SESSION);
		}
	}

?>