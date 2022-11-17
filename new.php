<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "library_management_system";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Unable to connect");

echo"Great work";
?>