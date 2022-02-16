<?php
include "header.php";
require_once 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql="SELECT * FROM `user_accounts` WHERE username='$username' AND password ='$password'";

$result= $conn->query($sql);
$row_cnt = $result->num_rows;
if ($row_cnt > 0) {
     echo "<h3>welcome $username !</h3><br>";

     echo "My comments:
     Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
      incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
       exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
        in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.";
        
     echo "<br><a href='profile.php' >Edit profile </a>";
   
    }
else { echo "You did not register yet."; }
    
    

include "footer.php";
?>