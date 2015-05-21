<?php
/* basis SQL settings en functies */
$dbbhost = 'localhost';
$dbbuser = 'yeti';
$dbbpass = 'yetiismooi';
$dbbname = 'yeti'; 
	
function open_database(){
	$dbconn = mysql_connect($dbbhost, $dbbuser, $dbbpass) or die("Couldn't connect to SQL Server"); 
	mysql_select_db($dbbname)
}

function close_database(){
	mysql_close($dbconn)
}
?>