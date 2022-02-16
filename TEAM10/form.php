<?php
  include 'header.php';
?>

<script type="text/javascript" src="form_validation.js"></script>

<div id="users" style="text-align: center; margin: auto; width: 500px; padding: 150px; ">
 <form name = "form" action="register.php" method="post">
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