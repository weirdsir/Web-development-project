<?php
session_start(); 
include 'header.php';

if(isset($_SESSION['username'])){
  echo "user: ".$_SESSION['username']; echo " <form action='logout.php' method=''>
  <input type='submit' name='logout' style=' width: 10%;' value='sign out'> </form>
  <form action='profile.php' method=''>
   <input type='submit' name='profile' style=' width: 10%;' value='Edit profile'> </form>"; }

?>
<div class="title" style="margin-left: 30px;"><br>ABOUT US</div></div>
  <div class="container-fluid" style="background-color: #FFF0E3;">
    <div class="row">
      <div class="col-md-6">
        <div class="container-fluid">
          <img class="img-fluid" src="PICTURES/about_us.jpg" alt="people" width="600" height="500" style="margin-top: 5ch;
          margin-bottom: 10ch; float: left; padding-left: 0px;
          border-radius: 0%;">
      </div>
      </div>
      <div class="col-md-6">
        <div class="container-fluid">
          <div class="maintext">Nullam massa purus, accumsan id tempor id, porttitor vel turpis. 
          Nunc et eleifend turpis. Ut rutrum, justo non feugiat cursus, 
          erat purus auctor nibh, vel efficitur erat nisl accumsan diam. 
          Sed eu turpis dolor. Morbi nisi felis, pretium et interdum ac, 
          aliquam a leo. Vestibulum sed lacinia lectus.<br>
          <br>
          Maecenas bibendum odio eu odio luctus facilisis.Nullam massa purus
          , accumsan id tempor id, porttitor vel turpis. 
          Nunc et eleifend turpis. Ut rutrum, justo non feugiat cursus, 
          erat purus auctor nibh, vel efficitur erat nisl accumsan diam. 
          Sed eu turpis dolor. Morbi nisi felis, pretium et interdum ac, 
          aliquam a leo. Vestibulum sed lacinia lectus.
          Maecenas bibendum odio eu odio luctus facilisis.</div>
          <h2>Changing Font Color </h2>
          <form action = "">
              <label>
                Font color: 
                <input type = "color"  name = "foreground" size = "10"
                      onchange = "setColor('foreground', this.value)" />
              </label>
              <br />
          </form>
          <script>
            function setColor(where, newColor) {
            if (where == "background")
              document.body.style.backgroundColor = newColor;
            else
              document.body.style.color = newColor;
            }
         </script>
        </div>
      </div>
    </div>
  </div>

  <?php 
include 'footer.php';
?>

    