<?php

function session_login($tmp_username, $tmp_auth_read, $tmp_auth_write){
	session_start();
	$_SESSION['current_user']=$tmp_username;
	$_SESSION['auth_read']= $tmp_auth_read;
	$_SESSION['auth_write']= $tmp_auth_write;
	echo "Welkom $tmp_username<br>";
}

function session_logout(){
	unset($_SESSION["current_user"]);
	unset($_SESSION["auth_level"]);
	echo "Logged out";
}

function session_update(){

}

function session_check(){

}
/** Checks for a given pagenumber if the user has read and/or write access to the page.
 * 
 * @param int $tmp_pagenr The page number.
 * @return boolean The array with the values for read and write.
 */
function hasAcces($tmp_pagenr){
	
	$tmp_rights['read'] = false;
	$tmp_rights['write'] = false;
	
	If (in_array($tmp_pagenr, $_SESSION["auth_read"])) {
		$tmp_rights['read'] = true;
	}
	If (in_array($tmp_pagenr, $_SESSION["auth_write"])) {
		$tmp_rights['write'] = true;
	}
	return $tmp_rights;
}

/** Tests
 * 
 */
session_login('Jelle',array(1,2,3),array(2, 3));
echo $current_user;
echo "User: ".$_SESSION['current_user']."<br>";
$tmp_rigths = hasAcces(1);
echo (int)$tmp_rigths['read'], "<br>";
echo (int)$tmp_rigths['write'], "<br>";
$tmp_rigths = hasAccess(2);
echo (int)$tmp_rigths['read'], "<br>";
echo (int)$tmp_rigths['write'], "<br>";


session_logout();
?>