<?php
session_start();

//if(!array_key_exists("userid", $_SESSION)){
	//we're not logged in, redirect user
//	header("Location: login.php");
//}else{
	//we are logged in, show the form

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<!--
    by: Robert Airth
        Modified by: Isaac Travers and Robert Airth
    last modified: 4/5/2020
-->

<head>
    <title>HelpAlert Login</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-" crossorigin="an$


    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/grids-responsive-min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="css/marketing.css">
</head>

<body class="background centered-content">

<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
  <a class="pure-menu-heading" href="landing.php"><img src="I_dont_like_this.png" width="250" height="50"></a>

        <ul class="pure-menu-list">
            <li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Home</a></li>
            <li class="pure-menu-item"><a href="#" class="pure-menu-link">Profile</a></li>
            <li class="pure-menu-item"><a href="#" class="pure-menu-link">Settings</a></li>
        </ul>
    </div>
</div>

<div class="background centered-content-wide">
    <div class="splash">
    <form method="get"
          action="responseList.php">
        <fieldset>
            <legend class="splash-subhead centered-content"> Help Request Message</legend>
            <label class="splash-subhead" for="message"> Message: </label>
            <textarea class="blackFont" name="message" id="message" placeholder="Explain what you need help with." rows="10" cols="50"></textarea>
        </fieldset>
        <fieldset class="splash-subhead grid-layout-two-25-75">
            <legend class="splash-subhead centered-content"> Location </legend>
            <p class="r1c1-2">Leave these fields blank if using Location Services</p>
            <label class="r2c1 splash-subhead" for="lat"> Latitude: </label>
            <input class="r2c2 blackFont" type="number" step="0.000001" name="lat" id="lat" /> <br/>
            <label class="r3c1 splash-subhead" for="long"> Longitude: </label>
            <input class="r3c2 blackFont" type="number" step="0.000001" name="long" id="long" />
        </fieldset>
            <input class="blackFont boldFont" type="submit" value="Send Help Request" name="send" />
            <input class="blackFont boldFont"  type="submit" value="Cancel" name="cancel" />
    </form>
</div>
</body>
</html>

<?php

//}//end else statement

?>
