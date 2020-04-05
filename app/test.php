<?php
session_start();

if(array_key_exists("userid", $_SESSION)){

//test db connection
require_once("hsu_conn_helpAlert.php");
require_once("cfg/db_options.php");

echo "hello".$_SESSION["dbPass"]." ".$_SESSION["dbUser"];

}else{

}




//$conn = hsu_conn

?>
