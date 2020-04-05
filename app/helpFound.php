<?php

session_start();

//if(array_key_exists("userid", $_SESSION)){
    //user is not logged in, redirect to login
//    header("Location: login.php");

//}else{
	$_SESSION["message"] = "Help! I've fallen and I can't get up!";
	$_SESSION["response"] = "I'll be free to help in 20 mins, try not to die."; 
	$_SESSION["proximity"] = "0.2 Miles";
	$_SESSION["karma"] = "100%";
	$_SESSION["userid"] = "ATFtroll22";

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
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    

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

<div class=" splash-subhead background centered-content-wide">
    <div class="splash">
    <h2 class="splash-subhead table-heading"> Your request for help has been answered! </h2>
    <form method="get"
          action="helpRating.html">
        <fieldset class="centered-content-wide">
            <legend class="splash-subhead centered-content"> Help Request Overview </legend>
            <label class="whiteFont" for="message"> Help Message: </label>
            <p class="basicFont"  id="message"> <?= $_SESSION["message"]?> </p>
            <label class="whiteFont" for="reply"> Help Response: </label>
            <p class="basicFont id="response">  <?= $_SESSION["message"]?>  </p>
           
            <table class="table" id="helpers">
                <caption> Accepted Helper(s): </caption>
                <tr> <th scope="col"> Proximity </th>
                     <th scope="col"> Username </th>
                     <th scope="col"> Karma Level </th>
                </tr>
                <tr>
                    <td> <?= $_SESSION["proximity"] ?> </td> 
                    <td> <?= $_SESSION["userid"] ?> </td> 
                    <td> <?= $_SESSION["karma"] ?> </td> 
                </tr>
                
            </table>
        
            
        </fieldset>
        <p> Only click Finished once you are finished being helped. </p>
        <input class="blackFont boldFont" type="submit" value="Finished" name="finished" />
    </form>
</div>

</body>
</html>

<?php

//}//end of statement

?>
