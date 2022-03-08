<?php
session_start();
  include 'header.php';
  include 'db.php';
  if(isset($_SESSION['username'])){
    echo "user: ".$_SESSION['username']; echo " <form action='logout.php' method=''>
    <input type='submit' name='logout' style=' width: 10%;' value='sign out'> </form>"; }
  try {
    
  } catch (exception $exc) {
    echo $exc->getTraceAsString();
  }
  if (isset($_POST['title']) &&  isset($_POST['content'])) {

  $subject = $_POST['title'];
  $message = $_POST['content'];
  $is_insert = $conn->query("INSERT INTO `posts`(`title`, `content`) VALUES ('$subject','$message')");
}
?>
          <input type="text1" name="subject" placeholder="title"><br><br>
          <textarea class="message" name="message" placeholder="write something..."></textarea><br>
          <button type = "submit1" name = "submit" onclick="location.href='user_posts.php'">Add a post</button><br><br>
        </form>
    </div>

    <?php
include 'footer.php';
?>