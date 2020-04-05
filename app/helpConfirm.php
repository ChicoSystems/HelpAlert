<?php
session_start();

//if(!array_key_exists("userid", $_SESSION)){
	//user is not logged in, redirect to login
//	header("Location: login.php");
//}else{
	//get proper data from db later, here' well fill in valeus
	$_SESSION["help_message"] = "Help! I've fallen and I can't get up!";

        //get data from session
	$helpMessage = $_SESSION["help_message"];
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
  <a class="pure-menu-heading" href="landing.php"><img src="try_deez_nuts.png" width="250" height="50"></a>

        <ul class="pure-menu-list">
            <li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Home</a></li>
            <li class="pure-menu-item"><a href="#" class="pure-menu-link">Profile</a></li>
            <li class="pure-menu-item"><a href="#" class="pure-menu-link">Settings</a></li>
        </ul>
    </div>
</div>

<div class=" splash background centered-content-wide">
    <div class=" centered-content-wide">

    <h2 class="splash-subhead"> Your offer to help has been accepted! </h2>
    <form method="get"
          action="landing.php">
        <fieldset >
            <legend class="splash-subhead centered-content"> Help Request Confirmation</legend>
            <label  class="splash-subhead centered-content" for="message"> Help Message: </label>
            <p class="whiteFont" id="message"> <?= $helpMessage ?></p>
            <label class="splash-subhead" for="addnote"> Additional Notes(optional): </label>
            <textarea class="blackFont" name="addnote" placeholder="Add any additional notes here" rows="2" cols="30"></textarea>
        
            
        </fieldset>
        <input class="blackFont boldFont" type="submit" value="Confirm" name="confirm" />
        <input class="blackFont boldFont" type="submit" value="Deny" name="deny" />
    </form>
</div>
</body>
</html>


<?php
//} //end else statement 
?>
