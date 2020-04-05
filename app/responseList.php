<?php

session_start();
if(!array_key_exists("userid", $_SESSION)){
	//not logged in
	header("Location: login.php");
}
else
{

//get info from db here
//oci_select_statements	
	

	//assign variables from db to session
	//assign info to session
	$data = array();
    $data.array_push(array("proximity" => "0.2 Miles",
                   "username" => "ToddTheDude",
                   "karma" => "100%",
                   "response" => "I'll be free to help in 20 min"));
    $data.array_push(array("proximity":"0.3 Miles",
                   "username":"LocoMoco420",
                   "karma" : "98%",
                   "response":"I can help later today."));

    $data.array_push(array("proximity"=>"0.9 Miles",
                   "username"=>"TigerKing39",
                   "karma" => "10%",
                   "response"=>"I'll help you if you have a tiger."));

    $data.array_push(array("proximity"=>"1.2 Miles",
                   "username"=>"KorbenDallas100",
                   "karma" => "100%",
                   "response"=>"Negative, I am a meat popsicle."));

    $data.array_push(array("proximity"=>"1.3 Miles",
                   "username"=>"CheckTheDeck22",
                   "karma" => "90%",
                   "response"=>"I'm free after 2pm. "));

    $data.array_push(array("proximity"=>"1.7 Miles",
                   "username"=>"NismoBoy19",
                   "karma" => "100%",
                   "response"=>"I've never done that before but I'll give it a shot."));

    $data.array_push(array("proximity"=>"1.9 Miles",
                   "username"=>"WakeyBakey707",
                   "karma" => "0%",
                   "response"=>"Trade labor for 215? "));

    $data.array_push(array("proximity"=>"2.0 Miles",
                   "username"=>"626Drift",
                   "karma" => "100%",
                   "response"=>"I am not very good at that, but I'm willing to help you do it."));

    $data.array_push(array("proximity"=>"2.1 Miles",
                   "username"=>"SickManji69",
                   "karma" => "100%",
                   "response"=>"I'm really good at that."));

    $data.array_push(array("proximity"=>"2.4 Miles",
                   "username"=>"ATFtrollLOL",
                   "karma" => "80%",
                   "response"=>"I'm free after 4:30pm today."));

?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<!--
    by: Robert Airth
    last modified: 4/4/2020

    you can run this using the URL:
    

-->

<head>
    <title>HelpAlert Responses</title>
    <meta charset="utf-8" />
</head>

<body>
    <form method="get"
          action="FILL IN PROPER PAGE HERE">
        <h3>These people want to help you</h3>  
        <table>
            <tr> <th scope="col"> Proximity </th>
                 <th scope="col"> Username </th>
                 <th scope="col"> Karma Level </th>
                 <th scope="col"> Response </th>
                 <th scope="col"> Accept ? </th>
            </tr>
            <?php
            foreach($data as $temp1)
            {
                             
                    ?>
                    <tr>
                    <td><?=$temp1["proximity"]?></td>
                    <td><?=$temp1["username"]?></td>
                    <td><?=$temp1["karma"]?></td>
                    <td><?=$temp1["response"]?></td>
                    </tr>
                    <?php
                                
            }
            ?>


        </table>
        <input type="submit" value="Notify Helpers" />
    </form>

</body>
</html>

<?php

}//end of if-else

?>
