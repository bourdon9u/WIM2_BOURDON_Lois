<?php

	$tab = array('http://username:password@hostname.com/path/file.php?arg1=value2#anchor',
				'http://username:password@hostname.com/path/file.php?arg1=value1&arg2=value2#anchor',
				'http://hostname.com:8080/path/file.php?arg1=value1&arg2=value2#anchor',
				'http://subdom.hostname.com/path/file.php?arg1=value1&arg2=value2#anchor',
				'http://www.example.com/path/file.php?arg1=value1&arg2=value2#anchor',
				'http://www.example.com/path/file.php?arg1=value1&arg2=value2#anchor',
				'/path/file.php?arg[]=value1&arg[]=value2#anchor',
				'path/file.php?arg1=value1&arg2=value2#anchor');
	foreach ($tab as $url){
		var_dump(parse_url($url));
	}
?>