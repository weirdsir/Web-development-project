<?php
include 'header.php';
include 'db.php';
$a = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM user_accounts WHERE id= '$a'");
$row= mysqli_fetch_array($result);
?>

<h1>Edit Profile</h1>

<div><?php if(isset($message)) { echo $message; } ?> </div>


 <form action="" method="post">
     
     <input type="text" name="first_name" placeholder="<?php echo $row['first_name']; ?>"> <br>
     <input type="text" name="last_name" placeholder="<?php echo $row['last_name']; ?>"> <br>
     <input type="text" name="username" placeholder="<?php echo $row['username']; ?>"> <br>
     <input type="text" name="email" placeholder="<?php echo $row['email']; ?>"><br>
     <input type="password" name="password" placeholder="<?php echo $row['password']; ?>"><br>
     <input type="submit" name="submit" value="update"><br>
 </form>


<?php 
if(isset($_POST['submit'])){
    
    $first_name = $_POST['first_name'];
    $query = mysqli_query($conn,"UPDATE user_accounts set first_name='$first_name' where id='$a'");
    $last_name = $_POST['last_name'];
    $query = mysqli_query($conn,"UPDATE user_accounts set last_name='$last_name' where id='$a'");
    $username = $_POST['username'];
    $query = mysqli_query($conn,"UPDATE user_accounts set username='$username' where id='$a'");
    $email = $_POST['email'];
    $query = mysqli_query($conn,"UPDATE user_accounts set email='$email' where id='$a'");
    $password = $_POST['password'];
    $query = mysqli_query($conn,"UPDATE user_accounts set password='$password' where id='$a'");
   

    if($query){
        echo "Successfully Updated <br>";
        echo "<a href='profile.php'> View changes </a>";
        #header("location: update.php");
    }
    else { echo "Not Updated";}
}
$conn->close();
include 'footer.php';
?>