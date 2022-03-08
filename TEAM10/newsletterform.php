<?php

include 'db.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){

if (isset($_POST['subscribe'])){

$name = $email = '';
$name = $_POST['name'];
$email = $_POST['email'];
$sql = ("INSERT INTO `newsletter`(`name`, `email`) VALUES ('$name','$email')");
mysqli_query($conn, $sql);
header("Location: thanks.php?subscribed");
  echo "<script> alert('Thanks for your subscription');  </script>";
  exit();
}
}
?>