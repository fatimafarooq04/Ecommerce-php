<?php
require 'connection.php';
$id = $_GET['dltid'];
//echo $userid
$dltquery = "DELETE FROM `admin` WHERE id=$id";
$result= mysqli_query($conn,$dltquery);
echo"<script>
alert('Deleted sucessfully');
window.location.href='showsignup.php';
</script>"
?>