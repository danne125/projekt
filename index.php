<?php 


require_once('connect.php');


/* testutskrift, prepare statements kommer senare..  */
$spelarquery = $database->query("SELECT name, descriptions FROM players");


$spelare = $spelarquery->fetchAll(PDO::FETCH_ASSOC);


for ($i=0; $i < $spelarquery->rowCount(); $i++) {
	
	echo $spelare[$i]['name'] . "<br>";
}


echo "Hej jag har andra timmerkoja till coach"
?>