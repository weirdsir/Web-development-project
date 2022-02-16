<?php include "header.php";
 ?>

<?php  
include "db.php";
    if(isset($_POST['do-search'])) {
        $searchQuery = $_POST['query'];
        $result = mysqli_query($conn,"SELECT * FROM user_accounts WHERE first_name LIKE '%$searchQuery%'
                                                                    OR last_name LIKE '%$searchQuery%' 
                                                                    OR username LIKE '%$searchQuery%'
                                                                    OR email LIKE '%$searchQuery%'");
        while ($row = mysqli_fetch_array($result)) {
            echo $row['first_name']."  ".$row['last_name']."  ".$row['username']."  ".$row['email']."<br>";
            
        }
    }
    ?>


<?php include "footer.php"; ?>


