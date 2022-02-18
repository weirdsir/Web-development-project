<?php
  include 'header.php';
?>

<div id="users" style="text-align: center; margin: auto; width: 500px;">
 <form action="register.php" method="post">
     <input type="text" name="first_name" placeholder="First name..."> <br>
     <input type="text" name="last_name" placeholder="Last name..."> <br>
     <input type="text" name="username" placeholder="Username..."> <br>
     <input type="text" name="email" placeholder="Email..."><br>
     <input type="password" name="password" placeholder="Password..."><br>
     <input type="password" name="password_conf" placeholder="Repeat password..."><br>
     <input type="submit" name="do-register" value="Register"><br>
     
 </form>

</div>

<?php
  include 'footer.php';
?>