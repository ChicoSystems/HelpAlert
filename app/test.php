<?php
session_start();

if(array_key_exists("userid", $_SESSION)){

//test db connection
require_once("hsu_conn_helpAlert.php");
require_once("cfg/db_options.php");

//echo "hello".$_SESSION["dbPass"]." ".$_SESSION["dbUser"];
$conn = hsu_conn_helpAlert($_SESSION["dbUser"], $_SESSION["dbPass"]);

if($conn){
  echo "connection succedded";

  //test query
  $query_string = "select * from appuser";

  $empl_stmt = oci_parse($conn, $query_string);

  oci_execute($empl_stmt, OCI_DEFAULT);

  while (oci_fetch($empl_stmt)){
    $userid = oci_result($empl_stmt, "USER_ID");
    $lat = oci_result($empl_stmt, "LATITUDE");
    $long = oci_result($empl_stmt, "LONGITUDE");
    echo "user_id: ".$userid." ".$lat." ".$long;
  }

}else{
  echo "connection failed";
}

print_r($conn, true);


}else{
	header("Location login.php");
}




//$conn = hsu_conn

?>
