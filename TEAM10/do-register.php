<?php include 'header.php';?>

<?php
require_once 'db.php';
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['passwords'];
$password_conf = $_POST['password_conf'];

$reg = mysqli_query($dbname," insert into user_accounts (username, email, passwords) VALUES ('$username', '$email', '$password')");
if ($reg){
    echo 'done';
} else {
    echo 'error';
}


include 'footer.php';
?>
