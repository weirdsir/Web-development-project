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

$checkEmail="SELECT * FROM `user_accounts` WHERE email='$email' OR username='$username'";

$result = $conn->query($checkEmail);
$row_cnt = $result->num_rows;
if ($row_cnt < 1) {

if ($password === $password_conf ) {
   

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
}
else {
    echo "The passwords are not same";
}
}
else {
    echo "username or email has already registered!";
}

$conn->close();

?>

<?php
include 'footer.php';
?>






    
