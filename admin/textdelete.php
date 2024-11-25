<?php
require 'connection.php';
$head_id = $_GET['dltid'];
//echo $userid
$dltquery = "DELETE FROM `contacttext` WHERE head_id=$head_id";
$result= mysqli_query($conn,$dltquery);
echo"<script>
alert('Deleted sucessfully');
window.location.href='showtext.php';
</script>"
?>