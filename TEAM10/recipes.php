<?php
session_start();
    include 'header.php';
    if(isset($_SESSION['username'])){
      echo "user: ".$_SESSION['username']; echo " <form action='logout.php' method=''>
      <input type='submit' name='logout' style=' width: 10%;' value='sign out'> </form>
      <form action='profile.php' method=''>
       <input type='submit' name='profile' style=' width: 10%;' value='Edit profile'> </form>"; }
?>

        <div class="row">
          <div class="col-sm text-center">
            <img class="category" src="PICTURES/soups_main.jpg" alt="soups" width="250" height="250"><br>
          

            <input type="button" class="btn" style=" background-color: #FC9642; font-family: 'Patrick Hand', cursive;
                    font-size: 20px !important; " onclick="location.href='Recipe_soups.php';" 
                    onmouseover = "this.style.color = 'white'; 
                        this.style.fontStyle = 'italic';
                        this.style.backgroundColor  = '#FC9642';
                        this.style.fontSize = '2em';";
         onmouseout = "this.style.color = 'black';
                       this.style.fontStyle = 'normal';
                       this.style.fontSize = '1.1em';"; value="soups" />
           

          </div>
          <div class="col-sm text-center">
            <img class="category" src="PICTURES/salads_main.jpg" alt="salads" width="250" height="250"><br>
          
            <input type="button" class="btn" style=" background-color: #FC9642; font-family: 'Patrick Hand', cursive;
                    font-size: 20px !important; " onclick="location.href='Recipe_salads.php';"
                    onmouseover = "this.style.color = 'white'; 
                        this.style.fontStyle = 'italic';
                        this.style.backgroundColor  = '#FC9642';
                        this.style.fontSize = '2em';";
         onmouseout = "this.style.color = 'black';
                       this.style.fontStyle = 'normal';
                       this.style.fontSize = '1.1em';"; value="salads" />
          

          </div>
          <div class="col-sm text-center">
            <img class="category" src="PICTURES/drinks_main.jpg" alt="drinks" width="250" height="250"><br>

            <input type="button" class="btn" style=" background-color: #FC9642; font-family: 'Patrick Hand', cursive;
            font-size: 20px !important; " onclick="location.href='Recipe_drinks.php';"
            onmouseover = "this.style.color = 'white'; 
                        this.style.fontStyle = 'italic';
                        this.style.backgroundColor  = '#FC9642';
                        this.style.fontSize = '2em';";
         onmouseout = "this.style.color = 'black';
                       this.style.fontStyle = 'normal';
                       this.style.fontSize = '1.1em';"; value="drinks" /> 
          

          </div>
        </div>
      </div>
      <?php
    include 'footer.php';
?>