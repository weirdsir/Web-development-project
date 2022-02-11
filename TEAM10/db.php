<?php
$servername="db";
$username="younesPHP";
$password="Yk206508";
$dbname ="younesPHP";
// creating connection 
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error); }
    echo "connected successfully";
?>