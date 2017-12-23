<?php

$dbhost= 'localhost';
$dbuser= 'root';

$conn =mysql_connect($dbhost, $dbuser,"")
	or die ("Could not connect to mysql");

$dbname= 'blood';
mysql_select_db($dbname);

?>
