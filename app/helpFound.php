<?php
session_start();

if(array_key_exists("userid", $_SESSION)){

}else{
	$_SESSION["message"] = "Help! I've fallen and I can't get up!";
	$_SESSION["response"] = "I'll be free to help in 20 mins, try not to die."; 
	$_SESSION["proximity"] = "0.2 Miles";
	$_SESSION["karma"] = "100%";
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<!--
    by: Robert Airth
    Modified By: Isaac Travers
    last modified: 4/4/2020
-->

<head>
    <title>HelpAlert Request Summary</title>
    <meta charset="utf-8" />
</head>

<body>

    <h2> Your request for help has been answered! </h2>
    <form method="get"
          action="helpFound_processor.php">
        <fieldset>
            <legend> Help Request Overview </legend>
            <label for="message"> Help Message: </label>
            <p id="message"> <?= $_SESSION["message"]?> </p>
            <label for="reply"> Help Response: </label>
            <p id="response">  <?= $_SESSION["message"]?>  </p>
           
            <table id="helpers">
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
        <input type="submit" value="Finished" name="finished" />
    </form>

</body>
</html>

<?php

}//end if else statement

?>
