<?php
# 1. Create/read a text file by using approprite php functions 
echo "<hr><h2>Creating a file </h2>";
$newfile = fopen('file.txt','w') or die ("Failed to create a file");
$txt = "Hello world this is interesting. <br>";
fwrite($newfile, $txt);
fclose($newfile);
    # Step 1: check if file exists or not
echo "<hr><h2>Checking file </h2>"; 
if (file_exists("file.txt")) echo "File exists";
else echo "File does not exist";
    # Step 2: Open the file using appropriate mode. (each member opens the file in different mode)
    # Step 3: Use fwrite/fread function to write/read on the file your team name and members name. 
echo "<hr><h2>Reading from a file </h2>"; 
$fname = "file.txt";
$handle = fopen($fname, "r");
$cont = fread($handle, filesize($fname));
echo $cont;
fclose($handle);
    # Step 4: Close the file 
?>