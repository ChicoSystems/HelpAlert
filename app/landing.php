<?php
    session_start();
    if(!array_key_exists("userid", $_SESSION)){
         //user is not logged in, redirect
	header("Location: login.php");   
    }else{
/*    require_once("functions.php") */

    /*$help_requests = getActiveHelpRequests();*/

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

<body class="background centered-content-wide">

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

    <h1 class="splash-subhead centered-content">HelpAlert!</h1>
    <h2 class="splash-subhead  centered-content">The #1 community-help app</h2>

    
    <form  method="get"
          action="FILL IN PROPER PAGE HERE">

        <input class="pure-form-input centered-content"  type="submit" value="Create Help Request" name="createRequest" id="createRequest" />

          
        <h3 class="splash-subhead">Notifications:</h3>
        <fieldset class="spash-subhead centered-content-wide" >
        <legend class="table-heading centered-content">Unanswered Help Requests</legend>
        <table class=" table">
            <tr> <th scope="col"> Proximity </th>
                 <th scope="col"> Username </th>
                 <th scope="col"> Karma Level </th>
                 <th scope="col"> Message </th>
                 <th scope="col"> Help? </th>
                 <th scope="col"> Response </th>
            </tr>
            <tr>
                <td> 0.2 miles </td> 
                <td> LittleOldLadyLOL </td> 
                <td> 100% </td> 
                <td> I need my pickle jar opened. </td>
                <td> <input class="checkbox" type="checkbox" value="Help" name="opt0"> </td>
                <td> <input type="text" placeholder="Type response here" name="response0"/> </td> 
            </tr>
            <tr>
                <td> 0.3 miles </td> 
                <td> childEntrepreneur112 </td> 
                <td> 90% </td> 
                <td> I need help starting my lawnmower. </td>
                <td> <input type="checkbox" value="Help" name="opt1">  </td> 
                <td> <input type="text" placeholder="Type response here" name="response1"/> </td> 
            </tr>
            <tr>
                <td> 0.9 miles </td> 
                <td> familyMan234 </td> 
                <td> 100% </td> 
                <td> I need help setting up decorations. </td>
                <td> <input type="checkbox" value="Help" name="opt2">  </td> 
                <td> <input type="text" placeholder="Type response here" name="response2"/> </td> 
            </tr>
            <tr>
                <td> 1.2 miles </td> 
                <td> CathyTheCooker </td> 
                <td> 100% </td> 
                <td> I need 2 tablespoons of chili powder. </td>
                <td> <input type="checkbox" value="Help" name="opt3">  </td> 
                <td> <input type="text" placeholder="Type response here" name="response3"/> </td> 
            </tr>
            <tr>
                <td> 1.3 miles </td> 
                <td> CarpenterMcGee22 </td> 
                <td> 90% </td> 
                <td> I need some help unloading lumber from my truck. </td>
                <td> <input type="checkbox" value="Help" name="opt4">  </td> 
                <td> <input type="text" placeholder="Type response here" name="response4"/> </td> 
            </tr>
        </table>
        <input class="pure-form-input" type="submit" value="Send Replies for help" />
    </fieldset>

    <fieldset class="splash-subhead grid-layout-two-25-75">
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

    <fieldset class="splash-subhead grid-layout-two-25-75">
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
    </div>
</div>
</body>
</html>


<?php

}//end elsec

?>
