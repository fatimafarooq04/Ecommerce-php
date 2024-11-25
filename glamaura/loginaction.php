<?php
session_start();
require "connection.php";
if (isset($_POST['sub'])) {
$useremail=$_POST['email'];
$userpassword=$_POST['pass'];

$qry="SELECT * FROM `admin` WHERE email ='$useremail' && password ='$userpassword'and userrole='user'";
$res= mysqli_query($conn,$qry);
$data= mysqli_fetch_assoc($res);
$count=mysqli_num_rows($res);
if($count==0) 
{
   echo "<script> alert ('login failed'); window.location.href='index.php'</script>";
}
else {
  $_SESSION['email']=$useremail;
  $_SESSION['userimag']=$data['userimage'];
  $_SESSION['id']=$data['id'];
  $_SESSION['name']=$data['firstname'];


   echo "<script> alert ('succesfully logged in'); window.location.href='index.php'</script>";
}
}
?>