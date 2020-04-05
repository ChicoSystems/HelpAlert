<?php

session_start();
//if(!array_key_exists("userid", $_SESSION)){
        //not logged in
   //     header("Location: login.php");
//}
//else
//{

//get info from db here
//oci_select_statements


        //assign variables from db to session
        //assign info to session
    $data = array();

    $tempy = array("proximity" => "0.2 Miles",
                   "username" => "ToddTheDude",
                   "karma" => "100%",
                   "response" => "I'll be free to help in 20 min");
    array_push($data, $tempy);

    $tempy = array("proximity"=>"0.3 Miles",
                    "username"=>"LocoMoco420",
                    "karma" => "98%",
                    "response"=>"I can help later today.");
                    array_push($data, $tempy);

    $tempy = array("proximity"=>"0.9 Miles",
                   "username"=>"TigerKing39",
                   "karma" => "10%",
                   "response"=>"I'll help you if you have a tiger.");
                   array_push($data, $tempy);

    $tempy = array("proximity"=>"0.9 Miles",
                   "username"=>"TigerKing39",
                   "karma" => "10%",
                   "response"=>"I'll help you if you have a tiger.");
                   array_push($data, $tempy);

    $tempy = array("proximity"=>"1.2 Miles",
                   "username"=>"KorbenDallas100",
                   "karma" => "100%",
                   "response"=>"Negative, I am a meat popsicle.");
                   array_push($data, $tempy);

    $tempy = array("proximity"=>"1.3 Miles",
                   "username"=>"CheckTheDeck22",
                   "karma" => "90%",
                   "response"=>"I'm free after 2pm. ");
                   array_push($data, $tempy);

                   $tempy = array("proximity"=>"1.7 Miles",
                   "username"=>"NismoBoy19",
                   "karma" => "100%",
                   "response"=>"I've never done that before but I'll give it a shot.");
                   array_push($data, $tempy);

    $tempy = array("proximity"=>"1.9 Miles",
                   "username"=>"WakeyBakey707",
                   "karma" => "0%",
                   "response"=>"Trade labor for 215? ");
                   array_push($data, $tempy);

    $tempy = array("proximity"=>"2.0 Miles",
                   "username"=>"626Drift",
                   "karma" => "100%",
                   "response"=>"I am not very good at that, but I'm willing to help you do it.");
                   array_push($data, $tempy);

    $tempy = array("proximity"=>"2.1 Miles",
                   "username"=>"SickManji69",
                   "karma" => "100%",
                   "response"=>"I'm really good at that.");
                   array_push($data, $tempy);

    $tempy = array("proximity"=>"2.4 Miles",
                   "username"=>"ATFtrollLOL",
                   "karma" => "80%",
                   "response"=>"I'm free after 4:30pm today.");
                   array_push($data, $tempy);
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
        <a class="pure-menu-heading" href="">Help Alert!</a>

        <ul class="pure-menu-list">
            <li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Home</a></li>
            <li class="pure-menu-item"><a href="#" class="pure-menu-link">Profile</a></li>
            <li class="pure-menu-item"><a href="#" class="pure-menu-link">Settings</a></li>
        </ul>
    </div>
</div>

<div class="background centered-content-wide">
    <div class=" centered-content-wide">
    <form method="get"
          action="helpFound.php">
        <h3>These people want to help you</h3>
        <table class="table">
            <tr> <th scope="col"> Proximity </th>
                 <th scope="col"> Username </th>
                 <th scope="col"> Karma Level </th>
                 <th scope="col"> Response </th>
                 <th scope="col"> Accept ? </th>
            </tr>

            <?php
            $counter = 0;
            foreach($data as $temp1)
            {

                    ?>
                    <tr>
                    <td><?=$temp1["proximity"]?></td>
                    <td><?=$temp1["username"]?></td>
                    <td><?=$temp1["karma"]?></td>
                    <td><?=$temp1["response"]?></td>
                    <td><input type="checkbox" name="SELECTEDUSERNAME"/></td>
                    </tr>
                    <?php

            }
            ?>


        </table>
        <input class="blackFont boldFont" type="submit" value="Notify Helpers" />
    </form>
</div>
</body>
</html>

<?php

//}//end of if-else
