<?php
    session_start();
    if(!array_key_exists("userid", $_SESSION)){
         //user is not logged in, redirect
	header("Location: login.php");   
    }else{
    require_once("functions.php");

    $help_requests = getActiveHelpRequests();
	print_r($help_requests);

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<!--
    by: Robert Airth
    modifid: Isaac Travers   
    last modified: 4/4/2020
   
-->

<head>
    <title>HelpAlert Landing</title>
    <meta charset="utf-8" />
</head>

<body>
    <h1>HelpAlert!</h1>
    <h2>The #1 community-help app</h2>

    
    <form method="get"
          action="FILL IN PROPER PAGE HERE">

        <input type="submit" value="Settings" name="settings" id="settings" />
        <input type="submit" value="Profile" name="profile" id="profile" />
        <input type="submit" value="Create Help Request" name="createRequest" id="createRequest" />

          
        <h3>Notifications:</h3>
        <fieldset>
        <legend>Unanswered Help Requests</legend>
        <table>
            <tr> <th scope="col"> LAT / LONG </th>
                 <th scope="col"> Username </th>
                 <th scope="col"> Karma Level </th>
                 <th scope="col"> Message </th>
                 <th scope="col"> Help? </th>
                 <th scope="col"> Response </th>
            </tr>

<?php

for($i = 0; $i < sizeof($help_requests); $i++){

?>

            <tr>
                <td> <?= $help_requests[$i]["lat"] ?> / <?= $help_requests[$i]["long"] ?> </td> 
                <td> <?= $help_requests[$i]["requesting_user_name"] ?> </td> 
                <td> <?= $help_requests[$i]["karma"] * 100 ?> % </td> 
                <td> <?= $help_requests[$i]["request_text"] ?> </td> 
                <td> <input type="checkbox" value="Help" name="opt<?= $i ?>"> </td>
                <td> <input type="text" placeholder="Type response here" name="response<?= $i ?>"/> </td> 
            </tr>
<?php

} //end for loop

?> 

        </table>
        <input type="submit" value="Send Replies for help" />
    </fieldset>

    <fieldset>
        <legend>Pending Help Requests</legend>
        <table>
            <tr> 
                 <th scope="col"> Confirm Response </th>
                 <th scope="col"> Proximity </th>
                 <th scope="col"> Username </th>
                 <th scope="col"> Karma Level </th>
                 <th scope="col"> Message </th>
                 <th scope="col"> Response </th>
            </tr>
            <tr>
                <td> <input type="submit" value="Confirm" name="confirm0" /> </td>
                <td> 0.2 miles </td> 
                <td> LittleOldLadyLOL </td> 
                <td> 100% </td> 
                <td> I need my pickle jar opened. </td>
                <td> I'll be free to help in 20 min. </td> 
            </tr>
            <tr>
                <td> <input type="submit" value="Confirm" name="confirm1" /> </td>
                <td> 0.3 miles </td> 
                <td> childEntrepreneur112 </td> 
                <td> 90% </td> 
                <td> I need help starting my lawnmower. </td>
                <td> I have some starting fluid you can try. </td>  
            </tr>
        </table>
    </fieldset>

    <fieldset>
        <legend>Active Help Requests</legend>
        <table>
            <tr> 
                 <th scope="col"> Proximity </th>
                 <th scope="col"> Username </th>
                 <th scope="col"> Karma Level </th>
                 <th scope="col"> Message </th>
                 <th scope="col"> Response </th>
            </tr>
            <tr>
                <td> 0.2 miles </td> 
                <td> LittleOldLadyLOL </td> 
                <td> 100% </td> 
                <td> I need my pickle jar opened. </td>
                <td> I'll be free to help in 20 min. </td> 
            </tr>
        </table>
    </fieldset>



    </form>

</body>
</html>


<?php

}//end elsec

?>
