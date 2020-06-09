<?php
   session_start();
   
   if(session_destroy()) {
   	echo "logout succesfully";
    header("Location:home.php");
    
   }
?>