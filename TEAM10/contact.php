<?php
  include 'header.php';
  include 'db.php';
  try {
    
  } catch (exception $exc) {
    echo $exc->getTraceAsString();
  }
  if (isset($_POST['firstname']) &&  isset($_POST['lastname']) &&  isset($_POST['email']) &&  isset($_POST['message'])) {

  
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $is_insert = $conn->query("INSERT INTO `contactform`(`First name`, `Last name`, `Email`, `Message`) VALUES ('$firstname','$lastname','$email','$message')");
  if($is_insert == TRUE) {
    echo "<h2>Thanks, your message sent</h2>";
    exit();
  }
}
?>

<div class="title"><br>CONTACT US/FEEDBACK</div></div>
    <div class="container-fluid" style="background-color: #FFF0E3;">
        <div class="p2">Tel: +358 446584125<br>
        Email: info@recipe.com<br><br></div>
        <form method="post"  >
          <input type="text1" name="firstname" placeholder="First name"><br><br>
          <input type="text1" name="lastname" placeholder="Last name"><br><br>
          <input type="email" name="email" placeholder="Email"><br><br>
          <textarea class="message" name="message" placeholder="Message"></textarea><br>
          <button type = 'submit1' name = 'submit'>Comment</button><br><br>
        </form>
    </div>

    <?php
include 'footer.php';
?>