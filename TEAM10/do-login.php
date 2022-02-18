<?php

include "header.php";
require_once 'db.php';

$username = $_POST['username'];
// Encrypted password with md5()
$password = md5($_POST['password']);

$sql="SELECT * FROM `user_accounts` WHERE username='$username' AND password ='$password'";

$result= $conn->query($sql);
$row_cnt = $result->num_rows;
if ($row_cnt > 0) {
   
     echo "<br><h3>welcome $username !</h3><br>";

     echo "My comments:<br>
     Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
      incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
       exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
        in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.";
      
    }
    
else { echo "Not signed up or wrong password"; }?>
<br>
<br>
<br>
<input type="button" class="btn" style="color: white; background-color: #FC9642; font-family: 'Patrick Hand', cursive;
                    font-size: 20px !important; " onclick="location.href='profile.php';" value="Edit profile"  />

<input type="button" class="btn" style="color: white; background-color: #FC9642; font-family: 'Patrick Hand', cursive;
                    font-size: 20px !important; " onclick="location.href='login.php';" value="Sign out"  />
    
    

<?php include "footer.php";
?>