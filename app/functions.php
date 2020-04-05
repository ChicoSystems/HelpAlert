<?php

require_once("cfg/db_options.php");
require_once("hsu_conn_helpAlert.php");

function getActiveHelpRequests(){
        /*if(array_key_exists("dbPass", $_SESSION)){
		$responseArray = array(); 
		$conn = hsu_conn_helpAlert($_SESSION["dbUser"], $_SESSION["dbPass"]);
		$query_string = "select * from meeting";
		$stmt = oci_parse($conn, $query_string);
		oci_execute($stmt, OCI_DEFAULT);
	
		while(oci_fetch($stmt)){
			//build associative array here
			$meeting_id = oci_result($stmt, "MEETING_ID");
	
		}

	//	return $responseArray;
	

	}else{
	//	return null;
	}*/

	$response = array();

	if(array_key_exists("dbPass", $_SESSION)){
		//echo $_SESSION["dbUser"];
		//array_push($response, "item1");	
		$conn = hsu_conn_helpAlert($_SESSION["dbUser"], $_SESSION["dbPass"]);
                //$query_string = "select * from meeting";
                $query_string = "select * from meeting, appuser
				 where requesting_user = appuser.user_id";
                $stmt = oci_parse($conn, $query_string);
                oci_execute($stmt, OCI_DEFAULT);

		 while(oci_fetch($stmt)){
                        //build associative array here
                        $meeting_id = oci_result($stmt, "MEETING_ID");
			$lat = oci_result($stmt, "LATITUDE");
			$long = oci_result($stmt, "LONGITUDE");
			$request_text = oci_result($stmt, "REQUEST_TEXT");
			$response_text = oci_result($stmt, "RESPONSE_TEXT");
			$requesting_user_id = oci_result($stmt, "USER_ID");
			$requesting_user_name = oci_result($stmt, "USERNAME");
			$karma = oci_result($stmt, "KARMA");
			//array_push($response["meeting_id"], $meeting_id);
			//$response["meeting_id"] = $meeting_id;
			//return array($meeting_id);
			$thisItem = array();
			$thisItem["meeting_id"] = $meeting_id;
			$thisItem["lat"] = $lat;
			$thisItem["long"] = $long;
			$thisItem["request_text"] = $request_text;
			$thisItem["response_text"] = $response_text;
			$thisItem["requesting_user_id"] = $requesting_user_id;
			$thisItem["requesting_user_name"] = $requesting_user_name;
			$thisItem["karma"] = $karma;

			array_push($response, $thisItem);
                }


		oci_free_statement($stmt);


	}else{

	}







	return $response;

}


?>
