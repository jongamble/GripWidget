<?php
$foo = 'http://www.jongamble.com';
	//$foo = parse_url($foo, PHP_URL_HOST);
	if((substr($foo,0,7) == 'http://') || (substr($foo,0,8) == 'https://')){
		$bar = str_replace('http://','',$foo );
		echo $bar;
	}else{
		echo $foo;
	}



?>