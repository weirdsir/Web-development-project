<?php session_start();
  include 'header.php';
?>
<style>
.error {color: #FF0000;}

</style>
<?php
if(!isset($_SESSION['username'])){

echo '<div id="users" style="text-align: center; margin: auto; width: 500px;">
 <form action="register.php" method="post">
 <span class="error">* required field</span><br>
     <input type="text" name="first_name" placeholder="First name..."> <br>
     <input type="text" name="last_name" placeholder="Last name..."> <br>
     <input type="text" name="username" placeholder="Username..." required><span class="error">  *</span><br>
     <!-- email validation -->
     <input type="email" name="email" placeholder="Email..." required><span class="error">  *</span> <br>
    
     <input type="password" id="password" name="password" placeholder="Password..." 
     pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase
      and lowercase letter, and at least 8 or more characters" required><span class="error">  *</span><br>

     <input type="password" name="password_conf" placeholder="Repeat password..." required><span class="error">  *</span><br>
     <input type="submit" name="do-register" value="Register"><br>
     
 </form>
</div>';}

else {
  echo "You are logged in.<form action='profile.php' method=''>
  <input type='submit' name='profile' style=' width: 10%;' value='go to profile'> </form>";
}
?>
<?php

  include 'footer.php';
?>