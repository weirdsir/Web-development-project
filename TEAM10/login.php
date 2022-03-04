<?php
session_start();
include "header.php";
require_once 'db.php';

if(!isset($_SESSION['username'])){
  
 echo'     
<div id="users2" style="text-align: center; margin: auto; width: 500px; padding: 50px;">
 <form action="do-login.php" method="post">
    <input type="text" name="username" placeholder="Username..."><br>
    <input type="password" name="password" placeholder="Password..."><br>
    <input type="submit" name="do-login" value="log In">
 </form>
 </div>';}
 else {
      echo "You are logged in.<form action='profile.php' method=''>
      <input type='submit' name='profile' style=' width: 10%;' value='go to profile'> </form>";
 }?>

<?php include "footer.php";?>
 