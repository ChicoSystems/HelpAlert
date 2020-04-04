<?php
/* processes a message confirmation 
   user clicks confirm or deny, deny just redirects user to landing.php
   confirm, confirms to the database with additional notes
*/

session_start();

if(!array_key_exists("userid", $_SESSION)){
	//not logged in, redirect to login.php
	header("Location: login.php");
}else{
	//we are logged in
	//did user click confirm or deny?
	if(array_key_exists("deny", $_GET){

		//TODO:UPDATE MEETING IN DB TO SHOW ITS DENIED
		//just redirect to landing.php
		header("Location: landing.php");
	}else{
		//TODO: UPDATE MEETING IN DB TO SHOW ITS CONFIRMED

		//and redirect to landing
		header("Location: landing.php");
	}
}



?>
