<?php
$servername="db";
$username="TEAM10";
$password="team10";
$dbname ="TEAM10";
 
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error); }
    echo "connected successfully"."<br>";
?>
