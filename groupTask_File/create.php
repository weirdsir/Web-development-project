<?php
# 1. Create/read a text file by using approprite php functions 
echo "<hr><h2>Creating a file </h2>";
echo "<hr><h2>Reading from a file </h2>"; 
$fname = "file.txt";
$handle = fopen($fname, "r");
$cont = fread($handle, filesize($fname));
echo $cont;
fclose($handle);
    # Step 1: check if file exists or not
echo "<hr><h2>Checking file </h2>"; 
if (file_exists("file.txt")) echo "File exists";
else echo "File does not exist";
?>