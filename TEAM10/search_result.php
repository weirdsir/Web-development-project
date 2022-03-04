<?php 
session_start();
include "header.php";

if(isset($_SESSION['username'])){
    echo "user: ".$_SESSION['username']; echo " <form action='logout.php' method=''>
    <input type='submit' name='logout' style=' width: 10%;' value='sign out'> </form>
    <form action='profile.php' method=''>
     <input type='submit' name='profile' style=' width: 10%;' value='Edit profile'> </form>"; }
 ?>

<?php  
include "db.php";
if(isset($_SESSION['username'])){
    if(isset($_POST['do-search'])) {
        $searchQuery = $_POST['query'];
        $result = mysqli_query($conn,"SELECT * FROM user_accounts WHERE first_name LIKE '$searchQuery'
                                                                    OR last_name LIKE '$searchQuery' 
                                                                    OR username LIKE '$searchQuery'
                                                                    OR email LIKE '$searchQuery'");
        while ($row = mysqli_fetch_array($result)) {
            echo $row['id']."***".$row['first_name']."***".$row['last_name']."***".$row['username']."***".$row['email']."<br><br>";
            
        }
    }
}
    ?>


<?php include "footer.php"; ?>


