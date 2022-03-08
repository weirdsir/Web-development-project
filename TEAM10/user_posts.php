<?php
session_start();
include 'header.php';
require 'db.php';

$query="SELECT * FROM posts";
$results = mysql_query($query);
$res = mysql_result($results, 1);

while ($res->fetchInto($row)) {
     echo "<form id='$row[1]' name='$row[1]' method=post action=''><td style='border-bottom:1px solid black'>$row[1]</td>
     <td style='border-bottom:1px solid black'><input type=hidden name='remove' value='$row[1]'><input type=submit value=Remove></td><tr></form>";
 }
?>

<?php include 'footer.php' ?>