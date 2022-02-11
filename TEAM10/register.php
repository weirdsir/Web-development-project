<?php include 'header.php';


 include 'db.php' ; 

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_conf = $_POST['password_conf'];


if (empty($_POST['username'])) {
    echo "<h1>Please input username</h1>";
}
if (empty($_POST['email'])) {
    echo "<h1>Please input email</h1>";
} 
if (empty($_POST['password'])) {
    echo "<h1>Please input password</h1>";
}
if (empty($_POST['password_conf'])) {
    echo "<h1>Please input password</h1>";
}
    else {
$sql="insert into user_accounts (username, email, password)
values('$username', '$email', '$password')";

if($conn->query($sql) === TRUE) {
    echo "Congratulations! Account Created.";
    
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






    
