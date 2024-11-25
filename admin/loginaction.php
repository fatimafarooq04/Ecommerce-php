<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

require "connection.php";
if (isset($_POST['sub'])) {
$useremail=$_POST['email'];
$userpassword=$_POST['password'];

$qry="SELECT * FROM `admin` WHERE email ='$useremail' && password ='$userpassword'";
$res= mysqli_query($conn,$qry);
if($data=mysqli_fetch_assoc($res)) 
{
    $_SESSION['role']=$data['userrole'];
    $_SESSION['name']=$data['firstname'];
    $_SESSION['img']=$data['userimage'];
    $_SESSION['user_id'] =$data['id'];


if ($_SESSION['role']=="admin") {
  header("location:index.php");
}else{
  header("location:login.php");

}
}
else {
    echo "<script>
alert('login failed');
window.location.href='login.php';
</script> ";
}
}
?>