<?php

$user='root';
$password='';
$database ='project1';
mysql_connect($webserver,$user,$password);
@mysql_select_db($database) or die( "Unable to connect to database");

function cleanme($sent){
	$sent=htmlentities($sent);
	$sent=myaql_real_escape_string($sent);
	return $sent;
	
}


?>