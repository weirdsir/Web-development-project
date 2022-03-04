<?php
session_start();
  include 'header.php';
  include 'db.php';
  if(isset($_SESSION['username'])){
    echo "user: ".$_SESSION['username']; echo " <form action='logout.php' method=''>
    <input type='submit' name='logout' style=' width: 10%;' value='sign out'> </form>
    <form action='profile.php' method=''>
     <input type='submit' name='profile' style=' width: 10%;' value='Edit profile'> </form>"; }
  try {
    
  } catch (exception $exc) {
    echo $exc->getTraceAsString();
  }
  if (isset($_POST['name']) &&  isset($_POST['mail']) &&  isset($_POST['subject']) &&  isset($_POST['message'])) {

  
  $name = $_POST['name'];
  $mail = $_POST['mail'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $is_insert = $conn->query("INSERT INTO `contactform`(`Name`, `Email`, `subject`, `Message`) VALUES ('$name','$mail','$subject','$message')");
  if($is_insert == TRUE) {
    echo "<h2>Thanks, your message sent</h2>";
    exit();
  }
}
?>

<div class="title">CONTACT US/FEEDBACK</div></div>
    <div class="container-fluid" style="background-color: #FFF0E3;">
        <div class="p2">Tel: +358 446584125<br>
        Email: info@recipe.com<br><br></div>
        <form method="post" action="contactform.php" >
          <input type="text1" name="name" placeholder="Full name"><br><br>
          <input type="text1" name="mail" placeholder="Email"><br><br>
          <input type="text1" name="subject" placeholder="Subject"><br><br>
          <textarea class="message" name="message" placeholder="Message"></textarea><br>
          <button type = "submit1" name = "submit">Comment</button><br><br>
        </form>
    </div>

    <?php
include 'footer.php';
?>

    