<?php
include "db.php";
date_default_timezone_set('Europe/Helsinki');

$dest = "uploaded_files/".basename($_FILES["userfile"] ["name"]);

    if (move_uploaded_file($_FILES["userfile"] ["tmp_name"], $dest)){
        echo "File uploaded successfully. <br>";
        echo "<a href='uploaded_files/'> Click to see list of files </a>";
    }

    else "Unable to upload file";
?>
