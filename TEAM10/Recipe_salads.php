<?php
session_start();
    include 'header.php';
    if(isset($_SESSION['username'])){
        echo "user: ".$_SESSION['username']; echo " <form action='logout.php' method=''>
        <input type='submit' name='logout' style=' width: 10%;' value='sign out'> </form>
        <form action='profile.php' method=''>
         <input type='submit' name='profile' style=' width: 10%;' value='Edit profile'> </form>
         <form action='post_create.php' method=''>
        <input type='submit' name='profile' style=' width: 10%;' value='Add a post'> </form>"; }
?>

<div class="title"><br>SALADS</div></div>
    
    <div class="container">
        <div class="row"> 
            <div class="col-xl-4">
                <img src="PICTURES/greek.jpg" class="img-fluid" alt="salads1" style="margin-top: 5ch;
                border-radius: 0%;">
            </div>
            <div class="col-xl-8">
                <div class="container" style="text-align: left;">
                    <div class="maintext"><div class="p2">A SALAD<br></div><br>Nullam massa purus, accumsan id tempor id, porttitor vel turpis. 
                        Nunc et eleifend turpis. Ut rutrum, justo non feugiat cursus, 
                        erat purus auctor nibh, vel efficitur erat nisl accumsan diam. 
                        Sed eu turpis dolor. Morbi nisi felis, pretium et interdum ac, 
                        aliquam a leo. Vestibulum sed lacinia lectus.
                        Maecenas bibendum odio eu odio luctus facilisis.Nullam massa purus
                        , accumsan id tempor id, porttitor vel turpis. </div> 
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-color: #FFF0E3;;"><br><br></div>

    <div class="container">
        <div class="row"> 
            <div class="col-xl-4">
                <img src="PICTURES/ceaser.jpg" class="img-fluid" alt="salads2" style="margin-top: 5ch;
                border-radius: 0%;">
            </div>
            <div class="col-xl-8">
                <div class="container" style="text-align: left;">
                    
                    <div class="maintext"><div class="p2">A SALAD<br></div><br>Nullam massa purus, accumsan id tempor id, porttitor vel turpis. 
                        Nunc et eleifend turpis. Ut rutrum, justo non feugiat cursus, 
                        erat purus auctor nibh, vel efficitur erat nisl accumsan diam. 
                        Sed eu turpis dolor. Morbi nisi felis, pretium et interdum ac, 
                        aliquam a leo. Vestibulum sed lacinia lectus.
                        Maecenas bibendum odio eu odio luctus facilisis.Nullam massa purus
                        , accumsan id tempor id, porttitor vel turpis. </div> 
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-color: #FFF0E3;;"><br><br></div>
    <div class="container-fluid" style="background-color: #FFF0E3;;"><br><br></div>

    <?php
    include 'footer.php';
?>