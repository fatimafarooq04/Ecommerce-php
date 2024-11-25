<?php
require "connection.php";
if (isset($_POST['sub'])) {
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$useremail=$_POST['email'];
$userrole=$_POST['userrole'];
$userpassword=$_POST['pass'];
// current date and time store in database signup form
$currentDateTime = date("Y-m-d H:i:s");

$img=$_FILES['img'];
$imagename=$img['name'];
$actualpath=$img['tmp_name'];
$mypath="img/".$imagename;

move_uploaded_file($actualpath,$mypath);
$Insert_qry="INSERT INTO `admin`( `firstname`, `lastname`, `email`, `password`,`userrole`,`userimage`) VALUES ('$firstname','$lastname','$useremail','$userpassword','$userrole','$mypath')";
$res= mysqli_query($conn,$Insert_qry);
echo "<script>
alert('Added Successfully');
window.location.href='login.php';
</script> ";
}
?>