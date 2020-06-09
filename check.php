<?php 

$host="localhost:3306";
$user="root";
$password="123456";
$db="test";

$conn = mysqli_connect($host,$user,$password,$db);
session_start();
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
{
//echo "Connected successfully";

  $myusername=filter_input(INPUT_POST,'uname');
  $mypassword=filter_input(INPUT_POST,'psw');

    
    $sql="select username,password from register where username='$myusername' AND password='$mypassword' ";
    
    $result=$conn->query($sql);
    
    if(mysqli_num_rows($result)==1){
          
        
        $_SESSION['login_user'] = $myusername;
        echo '<script language="javascript">';

        echo 'alert("login successfully");';
        echo 'window.location.href="home.php";';
       
        echo '</script>';
       // header("location: 1st.php");

        
    }
    else{
        echo '<script language="javascript">';
        echo 'alert(" You Have Entered Incorrect Password or Username");';
        echo 'window.location.href="login.html";';
        echo '</script>';
        //echo 'Go Back : ';
        //echo '<br><a href="login.html">Go</a>';

        exit();
    }
        

}
?>


