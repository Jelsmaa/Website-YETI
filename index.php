<?php
function session_login($tmp_username, $tmp_auth_level, $tmp_auth_special){
	session_start();
	$_SESSION["current_user"]=$tmp_username;
	$_SESSION["auth_level"]= $tmp_auth_level;
	$_SESSION["auth_special"]= $tmp_auth_special;
	echo "Logged in as $tmp_username<br>";
}

function session_logout(){
	unset($_SESSION["current_user"]);
	unset($_SESSION["auth_level"]);
	unset($_SESSION["auth_special"]);
	echo "Logged out";
}

function session_update(){
	/* Hoi Jelle */
}

function session_check(){

}

function magjijdit($req_read_special, $req_write_special){
	
	/* Stuur rechten terug in een array */
	If (in_array($req_read_special, $_SESSION["auth_special"])) {
		echo "Lezen: Ja<br>";
	} else {
		echo "Lezen: Nee<br>";
	}
	If (in_array($req_write_special, $_SESSION["auth_special"])) {
		echo "Schrijven: Ja<br>";
	} else {
		echo "SChijven: Nee<br>";
	}
}


session_login('Jelle','1',array(1,4,6,7,4,3,6,3,7,7,2,1,3,6,7,4,7,8,3,5,8,9,3,5,4,5,3,3,5,4,3,2,2,4,6,6,5,4,3,4,5,6,7,5,4,3,4,5,6,7,86,5,4,3,4,4,5,6,6));
echo $current_user;
echo $auth_level;
echo $auth_special[1];
echo "User: ".$_SESSION['current_user']."<br>";
foreach ($_SESSION["auth_special"] as $auth){
	echo "Level: $auth <br>";
}
magjijdit(4,2);
session_logout();
?>