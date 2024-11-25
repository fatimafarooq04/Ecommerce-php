<?php
require 'connection.php';
$log_id = $_GET['dltid'];
//echo $userid
$dltquery = "DELETE FROM `userlogin` WHERE log_id=$log_id";
$result= mysqli_query($conn,$dltquery);
echo"<script>
alert('Deleted sucessfully');
window.location.href='showlogin.php';
</script>"
?>