<?php

date_default_timezone_set('Europe/Paris');

$dateformat = "d/m/Y @ H:i:s";

if ($_POST["type"] == "timestamp") {

	if (is_numeric($_POST["timestamp"])) {
	
		echo date($dateformat,$_POST["timestamp"]);
	
	} else {
	
		echo "n/a";
	
	}

} elseif ($_POST["type"] == "date") {

	$time = mktime($_POST["h"],$_POST["m"],$_POST["s"],$_POST["mm"],$_POST["dd"],$_POST["yyyy"]);
	
	echo $time;

}

