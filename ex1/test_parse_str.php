<?php

$tableau = array(
'http://localhost/drupal/module1/fonction1/?arg1=value1&arg2=value2#anchor',
'http://localhost/drupal/index.php?q=module1/fonction1&arg[]=value1&arg[]=value2#anchor',
'http://localhost/drupal/index.php?q=module1/fonction1?arg1=value1&arg2=value2#anchor');

foreach ($tableau as $url){
	parse_str(parse_url($url,PHP_URL_QUERY),$output);
	var_dump($output);
}

?>