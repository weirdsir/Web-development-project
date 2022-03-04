<?php
session_start();
include "header.php";
require_once 'db.php';
$username = $_POST['username'];
// Encrypted password with md5()
$password = md5($_POST['password']);

$sql="SELECT * FROM `user_accounts` WHERE username='$username' AND password ='$password'";

$result= $conn->query($sql);
$row_cnt = $result->num_rows;
if ($row_cnt > 0) {
    $_SESSION['username'] = $username;
    echo "user: ".$_SESSION['username'];
   
     echo "<br><h3>welcome $username !</h3><br>";

     echo " <br><form action='profile.php' method=''>
     <input type='submit' name='profile' style=' width: 10%;' value='Edit profile'> </form>

     <form action='logout.php' method=''>
     <input type='submit' name='profile' style=' width: 10%;' value='Sign out'> </form>"; }

    
else { echo "<br> Not signed up or wrong password";

    echo "<br><form action='form.php' method=''>
    <input type='submit' name='profile' style=' width: 10%;' value='Sign up'> </form>

    <form action='login.php' method=''>
    <input type='submit' name='profile' style=' width: 10%;' value='Sign in'> </form>";
    }?>
<br>
<br>
<br>

    
    

<?php include "footer.php";
?>