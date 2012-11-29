<?php

$config ['db'] = array (

	'host' => 'localhost',
	'username' => 'root',
	'password' => '',
	'dbname' => 'fotbollsgrabbarna' 


);



//$database = new PDO('mysql:host='. $config['db']['host'] .'; dbname='. $config['db']['dbname'], $config['db']['password']); 



$database = new PDO("mysql:host=".$config['db']['host']."; dbname=fotbollsgrabbarna", 'root', '');




?>