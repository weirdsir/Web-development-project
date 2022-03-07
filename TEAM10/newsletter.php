<?php
  include 'header.php';
  include 'db.php';
?>


<div class="title">SUBSCRIBTION FORM</div></div>
    <div class="container-fluid" style="background-color: #FFF0E3;">
        <div class="p2">Subscribe if you don't want to skip any new recipes<br>
        </div>
<form action="newsletterform.php" method="post">
    <input type="text" name="name" placeholder="Full Name" required=""><br><br>
    <input type="email" name="email" placeholder="E-mail" required=""><br><br>
    <button type = "submit1" name = "subscribe">Subscribe</button>
</form>
    </div>

    <?php
include 'footer.php';
?>