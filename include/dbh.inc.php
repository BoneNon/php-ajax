<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book";

$conn = mysqli_connect($servername, $username, $password, $dbname);

date_default_timezone_set('asia/bangkok');
$todayT = date("H:i:s");
$todayD = date("Y-m-d");
$sellID = time();

?>