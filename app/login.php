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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    

    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/grids-responsive-min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="css/marketing.css">
</head>

<body class="background">

<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">Help Alert!</a>

        <ul class="pure-menu-list">
            <li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Home</a></li>
            <li class="pure-menu-item"><a href="#" class="pure-menu-link">Profile</a></li>
            <li class="pure-menu-item"><a href="#" class="pure-menu-link">Settings</a></li>
        </ul>
    </div>
</div>


<div class="splash-container">
    <div class="splash">
    <form method="get"
          action="login_processor.php">
      

        <fieldset class="splash-subhead grid-layout-two-25-75">
            <legend class="splash-subhead centered-content"> Log In</legend>
            <label class="r1c1 splash-subhead" for="username"> user ID:   </label>
            <input class="r1c2 blackFont" type="text" name="userid" id="userid" placeholder="userid IE 00001"/> <br/> 
            <!--<label class="r2c1 splash-subhead" for="password"> Password: </label>
            <input class="r2c2 blackFont" type="password" name="password" id="password" placeholder="Password"/>-->
        </fieldset>
        <fieldset class="splash-subhead grid-layout-two-25-75">
            <legend class="splash-subhead centered-content"> Location </legend>
            <p class="r1c1-2">Leave these fields blank if using Location Services</p>
            <label class="r2c1 splash-subhead" for="lat"> Latitude: </label>
            <input class="r2c2 blackFont" type="number" step="0.000001" name="lat" id="lat" /> <br/>
            <label class="r3c1 splash-subhead" for="long"> Longitude: </label>
            <input class="r3c2 blackFont" type="number" step="0.000001" name="long" id="long" />
        </fieldset>
            <input class="pure-button pure-button-primary" type="submit" value="Login" name="login" />
            <input class="pure-button pure-button-primary" type="submit" value="Forgot Username/Password" name="forgot" />

    </form>

    </div>
</div>

</body>
</html>

<?php
		}//end else statement
?>

