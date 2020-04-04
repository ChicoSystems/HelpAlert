<?php
        session_start();

	//are we logged in already
	if(array_key_exists("userid", $_SESSION)){
        	//we must want to logout
		session_unset();
		session_destroy();
		header("Location: login.php");
	}else{
		//display the form to the user
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<!--
    by: Robert Airth
	Modified by: Isaac Travers
    last modified: 4/4/2020
-->

<head>
    <title>HelpAlert Login</title>
    <meta charset="utf-8" />
</head>

<body>
    <form method="get"
          action="login_processor.php">
        <fieldset>
            <legend> Log In</legend>
            <label for="username"> userid: </label>
            <input type="text" name="userid" id="userid" placeholder="userid IE 00001"/> 
            <!--<label for="password"> Password: </label> 
            <input type="password" name="password" id="password" placeholder="Password"/> -->
        </fieldset>
        <fieldset>
            <legend> Location </legend>
            <p>Leave these fields blank if using Location Services</p>
            <label for="lat"> Latitude: </label>
            <input type="number" step="0.000001" name="lat" id="lat" />
            <label for="long"> Longitude: </label>
            <input type="number" step="0.000001" name="long" id="long" />
        </fieldset>
            <input type="submit" value="Login" name="login" />
            <input type="submit" value="Forgot Username/Password" name="forgot" />
    </form>

</body>
</html>

<?php
		}//end else statement
?>

