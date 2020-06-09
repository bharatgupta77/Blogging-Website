<?php
$host="localhost:3306";
$user="root";
$password="123456";
$db="test";

$conn = mysqli_connect($host,$user,$password,$db);

   session_start();

   if(isset($_SESSION["login_user"]) && $_SESSION["login_user"] === true){
    header("location: home.php");
    exit;
}
   
   //$user_check = $_SESSION['login_user'];
   
   /*$sql=("select user from register where user = '$user_check'");
   $query=mysqli_query($conn, $sql);
   
   if($row = mysqli_fetch_array($query))
   {
   	echo "  Welcome : ";
   	echo $row['user'];
   	echo "<br> You have successfully logged in.";
   }

*/
   
   
   
   //if(!isset($_SESSION['login_user'])){
   // header("location:2nd.html");
      //echo 'Welcome!!';
   //}
?>