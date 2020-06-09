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
	  $roll=$_POST['rollno'];
    $nam=$_POST['name'];
    $dep=$_POST['dept'];
    

     
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            } 
	    else
	    {

          $sql="insert into student(rollno,name,dept)  values($roll,$nam,$dep)";
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