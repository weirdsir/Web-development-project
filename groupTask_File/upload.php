<?php
include "db.php";
date_default_timezone_set('Europe/Helsinki');

$dest = "uploaded_files/".basename($_FILES["userfile"] ["name"]);


if (ini_set(upload_max_filesize, "4000M")) {

    if (move_uploaded_file($_FILES["userfile"] ["tmp_name"], $dest)){
        echo "The file has been successfully uploaded. <br>";
        echo "<a href='uploaded_files/'> Click to see list of files </a>";
    }
}
    else "Unable to upload file";
?>