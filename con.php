<?php

include('session.php');


?>

<!DOCTYPE html>
<head>
<title> Contact Us</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Oswald|Pathway+Gothic+One|Play|Titillium+Web" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://use.fontawesome.com/622cc25ba3.js"></script>
	</link>
<style>


body { overflow-x: hidden; margin-right:10px; margin-left: 10px; }

.contact_us{
  position: relative;
  
  padding: 0px 0 0px 0;
  overflow: hidden;
  min-width: 300px; 
  height: 300px;
 
  background-size: cover;
  background-attachment:fixed;
  background-position:right top;
}
.contact_us_fon{
  background-color: #232424;
  padding: 60px 0 0px 0;
  width: 100%;
  height: 100%;
  top: 0px;
  opacity: 0.8;
}
.contact_us_left{ 
  display: inline-block;
  margin: 0px 0px 0px 10%;
  width: 40%;
}
.contact_us_big_text{
  display: block;
}
.contact_us_big_text{
  color: white;
  font-size: 60px;
  padding: 0px 5px 0px 5px;
  text-transform: uppercase;
  font-family: 'Fjalla One', sans-serif;
}
.red_text{
  background-color: red;
  padding: 0px 10px 0px 10px;
}
.contact_us_small_text{
  color: white;
  font-size: 15px;
  margin: 10px 10px 10px 10px;
  word-spacing: 5px;
  font-family: 'Titillium Web', sans-serif;
}

.mail:before {font-family: FontAwesome;content: "\f0e0";}
.phone_number:before {font-family: FontAwesome;content: "\f095";}
.adress:before {font-family: FontAwesome;content: "\f015";}


.contact_us_right{
  display: inline-block;
  margin: 0px 8% 0px 0;
  width: 40%;
  height: 200px;
  position: absolute;
  border-left: 1px solid #808080;
}
.contact_us_icons{
  margin: 0px 0px 0px 20px;
}
.icon{
  background-color: white;
  display: inline-block;
  margin: 0px 0px 0px 10px;
  width: 50px;
  height: 50px;
  font-size: 25px;
  text-align: center;
  line-height: 1.9;
  color:  #252626;
  -webkit-transition:  0.9s;
}
.icon_facebook:before {font-family: FontAwesome; content: "\f09a";}
.icon_twitter:before {font-family: FontAwesome; content: "\f099";}
.icon_google_plus:before {font-family: FontAwesome; content: "\f0d5";}
.icon_linkedin:before {font-family: FontAwesome; content: "\f0e1";}


.red_text_2{
  padding: 0px 0 10px 0px;
  color: red;
}



.icon:hover { 
 background-color: red;
 color:  white;
} 

@media screen and (min-width:300px) and (max-width:899px) {
  /*contact_us///////////////////////////////////////////////////*/
.contact_us{
  min-width: 300px; 
}
.contact_us_fon{
  padding: 30px 0 0px 0;
}
.contact_us_left{ 
  display: block;
  width: 100%;
  margin: 10px 0px 0px 60px;
}
.contact_us_big_text{
  color: white;
  font-size: 50px;
} 
.contact_us_right{
  display: block;
  margin: 10px 0px 0px 40px;
  border: none;
  width: 100%; 
  
}
  
  }

  
 



.navbar {
  
  background-color: #555;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: black;
}

.active {
  background-color: blue;
}

.navbar input[type=text] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;

  margin-right: 16px;
  font-size: 12px;
}




#footer{
  
    clear: both;
    position: relative;
    height: 200px;
    margin-top: 200px;
    margin-left:-10px;
    margin-right: -20px;


  
}


.tomottoWrap{
  position: relative;
  background: #3CA2A2;
}

#tomotto{
  text-align: center;
  width: 960px;
  letter-spacing: 2px;
  text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
  line-height: 36px;
  margin: auto;
}

.lookWrap{
  position: relative; 
  background-color: black;

  float: left;
  width: 100%;
}

#look{
  margin: auto;
  width: 700px;
}
.dropdown {
  float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  cursor: pointer;
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
  background-color: grey;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin-top: 47px;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.show {
  display: block;
}

.legality{
  margin: auto;
  width:100%;
  text-align: center;
  clear: both;
  font: 10pt verdana;
  line-height: 2em;
  padding: 40px 0 0 0;
  color:white;
  background-color: black;
}

/*a:link {
  color: green;
 
  text-decoration:none;
}*/
a {
  color: white;
 
  text-decoration:none;
}


.section{
  overflow: hidden;
  float: left;
  display: inline;
  width: 160px;
  margin: 0 15px 15px 0;
  font: 10pt verdana;
  line-height: 1.6em;
}

.section h3{
  font-weight: normal;
  font: 12pt Georgia;
  text-transform: uppercase;
  color: #f2f2f2;
}

.section a{
  display: block;
}


</style>

</head>


<body style="background-color:#232424;">

<h3 style="color:white;">Bloggers</h3>

<div class="navbar">
  <a  href="home.php"><i class="fa fa-fw fa-home"></i> Home</a> 
  <a class="active" href="#"><i class="fa fa-fw fa-envelope"></i> Contact Us</a> 
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




<div class="contact_us">
    <div class="contact_us_fon">
    <div class="contact_us_left">
      
      <div class="contact_us_big_text">
           <span class="contact_us_big_text">contact <span class="red_text">us</span></span>
      </div>
      

      <h4 style="color:#FFFFFF; font-family: 'Fjalla One', sans-serif; padding-left:10px;" >PUNE</h4>
      <div class="contact_us_small_text adress"> Avdhoot Complex, Katraj near BVP, Pune-411043</div>
      <div class="contact_us_small_text phone_number"> 1800-98789-54343</div>
      <div class="contact_us_small_text mail"> bloggers.email@info.com</div>    

       
    </div>
    
    
    <div class="contact_us_right">
      
      <div class="contact_us_icons">
        <a href="#"><div class="icon icon_facebook"></div></a> 
        <a href="#"><div class="icon icon_twitter"></div></a> 
        <a href="#"><div class="icon icon_google_plus"></div></a> 
        <a href="#"><div class="icon icon_linkedin"></div></a> 
      </div>   
      
    </div>
    </div>
  </div>
  
  


<br> </br>
<br> </br>
<br> </br>
<br> </br>
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
        <a href="#">Contact Us</a>
        <a href="#">Privacy Policy</a>
      </div>
      <div class="section">
        <h3>Give_and_Take</h3>
        <a href="#">Sponsor</a>
      </div>
      <div class="section">
        <h3>Follow Us</h3>
         <a href="#">Twitter</a>        
        <a href="#">Pinterest</a>
        <a href="#">Instagram</a>
        <a href="#">Sponsor</a>
        
      </div>
      <div class="section">
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
</html>

