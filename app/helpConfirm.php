<?php
session_start();

if(!array_key_exists("userid", $_SESSION)){
	//user is not logged in, redirect to login
	header("Location: login.php");
}else{
	//get proper data from db later, here' well fill in valeus
	$_SESSION["help_message"] = "Help! I've fallen and I can't get up!";

        //get data from session
	$helpMessage = $_SESSION["help_message"];
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<!--
    by: Robert Airth
    modified by: Isaac Travers & Robert Airth
    last modified: 4/4/2020
-->

<head>
    <title>HelpAlert Confirmation</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/marketing.css">
</head>

<body>

    <h2> Your offer for help has been accepted! </h2>
    <form method="get"
          action="helpConfirm_processor.php">
        <fieldset class="">
            <legend> Help Request Confirmation</legend>
            <label for="message"> Help Message: </label>
            <p id="message"> <?= $helpMessage ?></p>
            <label for="addnote"> Additional Notes(optional): </label>
            <textarea name="addnote" placeholder="Add any additional notes here" rows="2" cols="30"></textarea>
        
            
        </fieldset>
        <input type="submit" value="Confirm" name="confirm" />
        <input type="submit" value="Deny" name="deny" />
    </form>

</body>
</html>


<?php
} //end else statement 
?>
