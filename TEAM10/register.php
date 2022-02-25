<?php 
 include 'header.php';
 include 'db.php' ; 
 
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$email = $_POST['email'];
// Encrypted password with md5() function.
$password = md5($_POST['password']);
$password_conf = md5($_POST['password_conf']);

if (empty($_POST['first_name'])) {
    echo "<h1>Please input First name</h1>";
}
elseif (empty($_POST['last_name'])) {
    echo "<h1>Please input Last name</h1>";
}

elseif (empty($_POST['username'])) {
    echo "<h1>Please input username</h1>";
}
elseif (empty($_POST['email'])) {
    echo "<h1>Please input email</h1>";
} 
elseif (empty(md5($_POST['password']))) {
    echo "<h1>Please input password</h1>";
}
elseif (empty(md5($_POST['password_conf']))) {
    echo "<h1>Please input password</h1>";
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






    
