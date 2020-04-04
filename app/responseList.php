<?php

 session_start();
if(!array_key_exists("userid", $_SESSION)){
	//not logged in
	header("Location: login.php");
}else{

	//get info from db here
//	oci_select_statements	
	

	//assign variables from db to session
	//assign info to session
	$_SESSION["proximity"] = "0.3 Miles";

	$data = Array();
	$data.push({{"proximity":"0.3 Miles"},
                   {"karma" : "100%"}});

	$data.push({{"proximity":"0.7 Miles"},
                   {"karma" : "22%"}});

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
        <table>
            <caption> These users want to help you: </caption>
            <tr> <th scope="col"> Proximity </th>
                 <th scope="col"> Username </th>
                 <th scope="col"> Karma Level </th>
                 <th scope="col"> Response </th>
                 <th scope="col"> Accept ? </th>
            </tr>
            <tr>
                <td> 0.2 miles </td> 
                <td> ToddTheDude </td> 
                <td> 100% </td> 
                <td> I'll be free to help in 20 min. </td>
                <td> <input type="checkbox" checked="checked" name="opt0"> </td> 
            </tr>
            <tr>
                <td> <?= $_SESSION["proximity"] </td> 
                <td> LocoMoco420 </td> 
                <td> 98% </td> 
                <td> I can help later today. </td>
                <td> <input type="checkbox"  name="opt1"> </td> 
            </tr>
            <tr>
                <td> 0.9 miles </td> 
                <td> TigerKing39 </td> 
                <td> 10% </td> 
                <td> I'll help you if you have a tiger. </td>
                <td> <input type="checkbox"  name="opt2"> </td> 
            </tr>
            <tr>
                <td> 1.2 miles </td> 
                <td> KorbenDallas100 </td> 
                <td> 100% </td> 
                <td> Negative, I am a meat popsicle. </td>
                <td> <input type="checkbox"  name="opt3"> </td> 
            </tr>
            <tr>
                <td> 1.3 miles </td> 
                <td> CheckTheDeck22 </td> 
                <td> 90% </td> 
                <td> I'm free after 2pm. </td>
                <td> <input type="checkbox"  name="opt4"> </td> 
            </tr>
            <tr>
                <td> 1.7 miles </td> 
                <td> NismoBoy19 </td> 
                <td> 100% </td> 
                <td> I've never done that before but I'll give it a shot. </td>
                <td> <input type="checkbox"  name="opt5"> </td> 
            </tr>
            <tr>
                <td> 1.9 miles </td> 
                <td> WakeyBakey707 </td> 
                <td> 0% </td> 
                <td> Trade labor for 215? </td>
                <td> <input type="checkbox"  name="opt6"> </td> 
            </tr>
            <tr>
                <td> 2.0 miles </td> 
                <td> 626Drift </td> 
                <td> 100% </td> 
                <td> I am not very good at that, but I'm willing to help you do it. </td>
                <td> <input type="checkbox"  name="opt7"> </td> 
            </tr>
            <tr>
                <td> 2.1 miles </td> 
                <td> SickManji69 </td> 
                <td> 100% </td> 
                <td> I'm really good at that. </td>
                <td> <input type="checkbox"  name="opt8"> </td> 
            </tr>
            <tr>
                <td> 2.4 miles </td> 
                <td> ATFtrollLOL </td> 
                <td> 80% </td>
                <td> I'm free after 4:30pm today. </td> 
                <td> <input type="checkbox"  name="opt9"> </td> 
            </tr>
        </table>
        <input type="submit" value="Notify Helpers" />
    </form>

</body>
</html>

<?php

}//end of if-else

?>
