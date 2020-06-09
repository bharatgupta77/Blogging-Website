<?php

include('session.php');


?>

<!DOCTYPE html>

<html>
<head>
<title> Blogging </title>

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<h3>Bloggers</h3>


<div class="navbar">
  <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a> 
  <a href="con.php"><i class="fa fa-fw fa-envelope"></i> Contact Us</a> 
  <input type="text"  placeholder="Search..">
  
  <a href="about.php"> About Us</a>
               <?php
                if(isset($_SESSION['login_user'])):
                ?>
                <div class="dropdown">
                <a  class="dropbtn" onclick="myFunction()"><i class="fa fa-fw fa-user"></i>Hello <?php echo $_SESSION['login_user'] ;?> <i class="fa fa-caret-down"></i></a>
                  
                <div class="dropdown-content" id="myDropdown" >
                  <a href="#">My Profile</a>
                  <a href="#">Help</a>
                   <a href="#">Likes</a>
                  <a href="logout.php"><i class="fa fa-fw fa-user"></i>Logout</a>
                </div>
                </div> 
                <!--<li> <a href="#" style="float:right; margin-right: 15px"><i class="fa fa-fw fa-user"></i><?php //echo $_SESSION['login_user'];?></a></li>
                <li> <a href="logout.php" style="float:right; margin-right: 15px"><i class="fa fa-fw fa-user"></i>Logout</a></li>-->
               <?php 

                
                else:?>

                <li><a href="login.html" style="float:right; margin-right: 15px"><i class="fa fa-fw fa-user"></i> Login</a></li>
                <?php
                endif;

                ?>
 

  
</div>

<br><marquee style="font-size: 18px; font-family: sans-serif; color: black;  "><a href="#" style="color: black;" ;>*Check out the new Blogs</a></marquee><br>




 <div id="footer">
  <div class="tomottoWrap">
    <div id="tomotto">
     footer
    </div>
  </div>
  <div class="lookWrap">
    <div id="look">
      <div class="section">
        <h3>Support</h3>
        <a href="#">FAQs</a>
        <a href="con.php">Contact Us</a>
        <a href="#">Privacy Policy</a>
      </div>
      <div class="section">
        <h3>Give & Take</h3>
        <a href="#">Sponsor</a>
      </div>
      <div class="section">
        <h3>Follow Us</h3>
        <a href="#">Facebook</a>
        <a href="#">Twitter</a>        
        <a href="#">Pinterest</a>
        <a href="#">Instagram</a>
        <a href="#">Sponsor</a>
        
      </div>
      <div class="section" >
        <h3>About Us</h3>
        <a href="about.php">About</a>
        
      </div>      
    </div>
  </div>
  <div class="legality">
       @Copyright 2018 - 2019 Bloggers website
      </div>
</div>
  

<script type="text/javascript">
  
  function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>


</body>
