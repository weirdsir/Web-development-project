<?php
session_start();
include 'header.php';
require 'db.php';

// $query="SELECT * FROM posts";
// $results = mysql_query($query);
// $res = mysql_result($results, 0);

// while ($res->fetchInto($row)) {
//     echo "<form id=\"$row[0]\" name=\"$row[0]\" method=post action=\"\"><td style=\"border-bottom:1px solid black\">$row[0]</td><td style=\"border-bottom:1px solid black\"><input type=hidden name=\"remove\" value=\"$row[0]\"><input type=submit value=Remove></td><tr></form>\n";
// }
?>

<?php include 'footer.php' ?>