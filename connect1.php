<?php
$host="localhost:3306";
      $dbusername="root";
       $dbpassword="123456";
       $dbname="test";

       // connect to the database

       $conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
       echo"connection made to database sucessfully";
       

if(isset($_POST['sign']))
{
	$emai=$_POST['email1'];
    $pass=$_POST['psw'];
    $phno=$_POST['phone'];
    $use=$_POST['username'];

     
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            } 
	    else
	    {

          $sql="insert into register(user,password,phone,username)  values('$emai','$pass','$phno','$use')";
          if ($conn->query($sql)) 
          {
           echo '<script language="javascript">';

              echo 'alert("New record created successfully");';
              echo 'window.location.href="login.html";';
       
           echo '</script>';
           
          }     
          else 
          {
           echo "Error: " . $sql . "<br>" . $conn->error;
          }
        }
}



?>

<!DOCTYPE html>
<html lang="en-US">
<body>

<br>
<a href="login.html" >Go to Login page</a>

</body>
</html>

