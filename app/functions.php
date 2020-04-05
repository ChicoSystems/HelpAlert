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
		array_push($response, "item1");	
		$conn = hsu_conn_helpAlert($_SESSION["dbUser"], $_SESSION["dbPass"]);
                $query_string = "select * from meeting, appuser
				 where requesting_user.user_id = appuser.user_id";
                $stmt = oci_parse($conn, $query_string);
                oci_execute($stmt, OCI_DEFAULT);

		 while(oci_fetch($stmt)){
                        //build associative array here
                        $meeting_id = oci_result($stmt, "MEETING_ID");
			$lat = oci_result($stmt, "LATITUDE");
			$long = oci_result($stmt, "LONGITUDE");
			$request_text = oci_result($stmt, "REQUEST_TEXT");
			$response_text = oci_result($stmt, "RESPONSE_TEXT");

                }


	}else{

	}







	return $response;

}


?>
