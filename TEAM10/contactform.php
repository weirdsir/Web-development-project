<?php

if (isset($_POST['submit'])) {
$name = $_POST['name'];
$subject = $_POST['subject'];
$mailFrom = $_POST['mail'];
$message = $_POST['message'];

$mailTo = "slavakich7@gmail.com";
$headers = "From: ".$mailFrom;
$txt = "You have receiverd an e-mail from ".$name.".\n\n".$message;

mail($mailTo, $subject, $txt, $headers);
header("Location: index.php?mailsend");

}

  include 'db.php';
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