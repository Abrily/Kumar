<?php	include_once 'DBfunctions.php';	$username = "dev";	$password = sha1("dev123");	$name = "Devindrapp Handraki";$dateTime = new DateTime("now", new DateTimeZone('Asia/Calcutta'));$mysqldate = $dateTime->format("Y-m-d H:i:s");	queryMysql("INSERT INTO administrator VALUES('$username','$name','$password', '$mysqldate')"); echo "Registered";?>