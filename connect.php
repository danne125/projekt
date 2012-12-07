<?php

$config ['db'] = array (

	'host' => 'sql201.byethost7.com',
	'username' => 'b7_11847952',
	'password' => 'Zlatan10',
	'dbname' => 'b7_11847952_fotbollsgrabbarna' 


);



//$database = new PDO('mysql:host='. $config['db']['host'] .'; dbname='. $config['db']['dbname'], $config['db']['password']); 



$database = new PDO("mysql:host=".$config['db']['host']."; dbname=fotbollsgrabbarna", 'root', '');




?>