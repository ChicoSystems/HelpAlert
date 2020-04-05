<?php

require_once("cfg/db_options.php");

function getActiveHelpRequests($dbUser, $dbPass){
	$responseArray = array(); 
	$conn = hsu_conn_helpAlert($dbUser, $dbPass);
	$query_string = "select * from meeting";
	$stmt = oci_parse($conn, $query_string);
	oci_execute($stmt, OCI_DEFAULT);

	while(oci_fetch($stmt)){
		//build associative array here
		$meeting_id = oci_result($stmt, "MEETING_ID");
	}
	

}




?>
