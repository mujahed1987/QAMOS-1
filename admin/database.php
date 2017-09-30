<?php

$host = "localhost";
$dbuser = "root";
$dbpass = "proman";
$db = "website";

$con = new mysqli($host, $dbuser, $dbpass, $db);
if($con->connect_error){
	die("Database Connection Failed: ".$con->connect_error);
}
$con->set_charset("utf8");
?>