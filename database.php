<?php
/* basis SQL settings en functies */
$dbbhost = 'localhost';
$dbbuser = 'yeti';
$dbbpass = 'yetiismooi';
$dbbname = 'yetiscratch'; 
	
function open_database(){
	$dbconn = mysql_connect($dbbhost, $dbbuser, $dbbpass) or die("Couldn't connect to SQL Server"); 
	mysql_select_db($dbbname);
}
function close_database(){
	mysql_close($dbconn);
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>