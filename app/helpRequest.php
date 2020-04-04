<?php
session_start();

if(!array_key_exists("userid", $_SESSION)){
	//we're not logged in, redirect user
	header("Location: login.php");
}else{
	//we are logged in, show the form

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<!--
    by: Robert Airth
    last modified: 4/4/2020
-->

<head>
    <title>HelpAlert Request</title>
    <meta charset="utf-8" />
</head>

<body>
    <form method="get"
          action="helpRequest_processor.php">
        <fieldset>
            <legend> Help Request Message</legend>
            <label for="message"> Message: </label>
            <textarea name="message" id="message" placeholder="Explain what you need help with." rows="10" cols="50"></textarea>
        </fieldset>
        <fieldset>
            <legend> Location </legend>
            <p>Leave these fields blank if using Location Services</p>
            <label for="lat"> Latitude: </label>
            <input type="number" step="0.000001" name="lat" id="lat" />
            <label for="long"> Longitude: </label>
            <input type="number" step="0.000001" name="long" id="long" />
        </fieldset>
            <input type="submit" value="Send Help Request" name="send" />
            <input type="submit" value="Cancel" name="cancel" />
    </form>

</body>
</html>

<?php

}//end else statement

?>
