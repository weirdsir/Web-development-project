<?php
session_start();
 include 'header.php';
 include 'db.php' ; 
 
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$email = $_POST['email'];
// Encrypted password with md5() function.
$password = md5($_POST['password']);
$password_conf = md5($_POST['password_conf']);

if (empty($_POST['username'])) {
    echo "<h2>Please input username</h2>";  
}
//Username validation
elseif (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
    echo "<h2>Only letters and white space allowed</h2>";
  }
elseif (empty($_POST['email'])) {
    echo "<h2>Please input email</h2>";
} 
elseif (empty($_POST['password'])) {
    echo "<h2>Please input password</h2>";
}
elseif (empty($_POST['password_conf'])) {
    echo "<h2>Please repeat password</h2>";
}
    else {
$sql="insert into user_accounts (first_name, last_name, username, email, password)
values('$first_name','$last_name','$username','$email','$password')";

if($conn->query($sql) === TRUE) {
    echo "Congratulations! Account Created.";

    echo " <br><form action='login.php' method=''>
    <input type='submit' name='do-login' style=' width: 10%;' value='Sign in'> </form>";
   
    
}
else
{
    echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();

} 


?>

<?php
include 'footer.php';
?>






    
