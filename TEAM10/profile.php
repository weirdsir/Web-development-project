<?php
session_start();
include 'header.php';
require 'db.php';

if(isset($_SESSION['username'])){
    echo "user: ".$_SESSION['username']; echo " <form action='logout.php' method=''>
    <input type='submit' name='logout' style=' width: 10%;' value='sign out'> </form>"; }
  $account = $_SESSION['username'];  
  if ($account == 'admin') {
    $sql = "SELECT * FROM `user_accounts`";
  }
  else {
    $sql = "SELECT * FROM `user_accounts` WHERE username = '$account'";
  }

$result = $conn->query($sql);
?>
<table class="table">
<tr>
<th>ID</th><th>First Name</th><th>Last Name</th>
<th>Username</th><th>Email</th><th>Password</th> <th>Edit</th>
<th>Delete</th>
</tr>
<?php 
if($result ->num_rows > 0) {
    while($row = $result ->fetch_assoc()){
?>
<tr>
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["first_name"]; ?></td>
<td><?php echo $row["last_name"]; ?></td>
<td><?php echo $row["username"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["password"]; ?></td>
<td><a href="edit-profile.php?id=<?php echo $row['id']; ?>">Edit</a></td>
<td><a href="delete_account.php?id=<?php echo $row['id']; ?>">Delete</a></td>
</tr>

<?php 
}
}
else
{
    echo "no results";
}
$conn->close();
?>
</table>
<?php include 'footer.php' ?>

