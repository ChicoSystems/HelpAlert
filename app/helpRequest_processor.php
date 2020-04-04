<?php
/* Isaac Travers
   Hackaton 2020
   Help Alert
   helpRequest_processor.php

   This will process the form submission from helpRequest.html
   1. Figure out who user is from $_SESSION variable.
   2. get help request text
   3. Get location Data
   4. Query db for list of users to send request to
   5. Notify those users
*/

//check if logged in
$_SESSION["username"] = "testuser";
$_SESSION["userid"] = "00001";

if(array_key_exists("username", $_SESSION){
 	//user is logged in, continue:
	$username = $_SESSION["username"];
	$userID = $_SESSION["userid"];

	//get message and location
	$message = $_GET["message"];
	$lat = $_GET["lat"];
	$long = $_GET["long"];
	echo "Creating Request for meeting ".$username." ".$message." ".$lat." ".$long;
}else{
	//display login page
}


?>
