<?php
session_start();
include 'header.php';
include 'db.php';
if(isset($_SESSION['username'])){
    echo "user: ".$_SESSION['username']; echo " <form action='logout.php' method=''>
    <input type='submit' name='logout' style=' width: 10%;' value='sign out'> </form>
    <form action='profile.php' method=''>
     <input type='submit' name='profile' style=' width: 10%;' value='Edit profile'> </form>"; }
$a = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM user_accounts WHERE id= '$a'");
$row= mysqli_fetch_array($result);
?>

<form method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<h3>Are you sure to delete your account?</h3>

<input type="submit" name="YES" value="YES" ><br>
<input type="submit" name="NO" value="NO" >
</form>

<?php 
if(isset($_POST['NO'])){
    echo "<a href='profile.php'>Back to the list </a> ";
}
if(isset($_POST['YES'])){
    $query = mysqli_query($conn,"DELETE FROM user_accounts where id='$a'");
    if($query){
        echo "Account Deleted with id: $a <br>";
        echo "<a href='profile.php'> Back to the list </a>";
        // if you want to redirect to update page after updating
        //header("location: update.php");
    }
    else { echo "Record Not Deleted";}
    }
$conn->close();
include 'footer.php';
?>
