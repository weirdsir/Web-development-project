<?php
  session_start();
  include 'header.php';
  include 'db.php';
  if(isset($_SESSION['username'])){
    echo "user: ".$_SESSION['username']; echo " <form action='logout.php' method=''>
    <input type='submit' name='logout' style=' width: 10%;' value='sign out'> </form>
    <form action='profile.php' method=''>
     <input type='submit' name='profile' style=' width: 10%;' value='Edit profile'> </form>"; }
?>


<div class="title">SUBSCRIBTION FORM</div></div>
    <div class="container-fluid" style="background-color: #FFF0E3;">
        <div class="p2">Subscribe if you don't want to skip any new recipes<br>
        </div>
<form action="newsletterform.php" method="post" style="padding-bottom: 100px;">
    <input type="text1" name="name" placeholder="Full Name" required=""><br><br>
    <input type="email" name="email" placeholder="E-mail" required=""><br><br>
    <button type = "submit1" name = "subscribe">Subscribe</button>
</form>
    </div>

    <?php
include 'footer.php';
?>