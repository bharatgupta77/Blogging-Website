<?php

include('session.php');


?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>About Us</title>
  
  
  
      <link rel="stylesheet" href="abt.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script> 
                $(document).ready(function(){
                  $("#flip1").click(function(){
                    $("#panel").addClass("blue");
                    $("#panel").slideToggle("slow");
                  });
                });   

                  $(document).ready(function(){
                  $("#flip2").click(function(){
                     $("#panel2").addClass("blue");
                    $("#panel2").slideToggle("slow");
                  });
                });   
                </script>

                <script>
                   $(document).ready(function(){
                  $("#flip5").click(function(){
                    $("#panel5").addClass("blue");
                    $("#panel5").slideToggle("slow");
                  });
                });   

                    $(document).ready(function(){
                  $("#flip4").click(function(){
                    $("#panel4").addClass("blue");
                    $("#panel4").slideToggle("slow");
                  });
                });   
               </script>
  
</head>

<body>
   <body style="background-image:url('pictures/0.jpg'); background-position: center;
  background-repeat: no-repeat;
  background-size: cover;  ">
  <h3 style="margin-top:28px;">Bloggers</h3>

<div class="navbar">
  <a class="active" href="home.php"><i class="fa fa-fw fa-home"></i> Home</a> 
  <a href="con.php"><i class="fa fa-fw fa-envelope"></i> Contact Us</a> 
  <input type="text"  placeholder="Search..">
  
  <a href="#"> About Us</a>
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
 
 <h2 style="text-align: center; font-size: 60px; margin-top: 80px;">About us</h2>

<br>
<br>
<br>
<div class="flip">
      <div id="flip1" > 
        <div class="front" style="background-image: url(data:image/png;base64,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)">
           <h1 class="text-shadow">Achievements</hi>
        </div>
      </div>

       <div id="panel" >
        <div class="back">
           <h2></h2>
           <p></p>
        </div>
       </div> 
</div>

<div class="flip">
  <div id="flip2"  >
    <div class="front" style="background-color:blue;">
       <h1 class="text-shadow">Our Mission</hi>
    </div>
  </div>  

   <div id="panel2"  >
    <div class="back">
       <h2></h2>
       <p></p>
    </div>
   </div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>




<div class="flip">
  <div id="flip5">
    <div class="front" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjoo4-24LzTmOdplhoqMzMzJDV1dOIqfAMiHScAsE4Luo3Ga-dMg);">
       <h1  class="text-shadow">Team</hi>
    </div>
  </div>
   <div id="panel5">
    <div class="back">
       <h2></h2>
       <p></p> 
    </div>
   </div> 
</div>


<div class="flip">
  <div id="flip4">
    <div class="front" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzP5bhMn7Zj4kSae7tkYzbFaWhV8-g5zUmaJSZRpCOQH1ttkgL)">
       <h1 class="text-shadow">History</hi>
    </div>
  </div>
   <div id="panel4">
    <div class="back">
       <h2></h2>
       <p></p> 
    </div>
   </div> 
</div>
  
  <br>
  <br>
  <br>
  <br>
 <br>
  <br>
  <br>
  <br>

   <br>
  
  
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
        <a href="con.xml">Contact Us</a>
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
      <div class="section">
        <h3>About Us</h3>
        <a href="#">About</a>
        
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


