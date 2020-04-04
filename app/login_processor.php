<?php
/* Isaac Travers
   Process the login Page
   Start a Session if needed, 
   end a session if already started
   redirect to landing page
*/

//does a session exist?
if(isset($_SESSION)){
	//a session already exists, redirect to landing page
        header("Location: landing.php");
}else{
	//No Session Exists, Create One and redirect to landing page
	session_start();
	$_SESSION["userid"] = $_GET["userid"];
	$_SESSION["latitude"] = $_GET["lat"];
	$_SESSION["longitude"] = $_GET["long"];	
        header("Location: landing.php");
}





?>
