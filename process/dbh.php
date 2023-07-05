<?php

$servername = "localhost";
$dBUsername = "root";
$dbPassword = "";
$dBName = "Swap_corp";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Databese Connection Failed";
}

?>