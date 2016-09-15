<?php
$tableau = array('http://username:password@hostname.com/path/file.php?arg1=value2#anchor',
			'http://username:password@hostname.com/path/file.php?arg1=value1&arg2=value2#anchor',
			'http://hostname.com:8080/path/file.php?arg1=value1&arg2=value2#anchor',
			'http://subdom.hostname.com/path/file.php?arg1=value1&arg2=value2#anchor',
			'http://www.example.com/path/file.php?arg1=value1&arg2=value2#anchor',
			'http://www.example.com/path/file.php?arg1=value1&arg2=value2#anchor',
			'/path/file.php?arg[]=value1&arg[]=value2#anchor',
			'path/file.php?arg1=value1&arg2=value2#anchor');

$tableau2 = array(PHP_URL_USER,PHP_URL_PORT,PHP_URL_SCHEME,PHP_URL_HOST,PHP_URL_PATH,PHP_URL_QUERY,PHP_URL_FRAGMENT);		
						
for ($i=0; $i<7;$i++){
		var_dump(parse_url($tableau[$i], $tableau2[$i]));
}

?>