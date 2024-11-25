<?php
require 'connection.php';
$userid = $_GET['dltid'];
//echo $userid
$dltquery = "DELETE FROM `categories` WHERE cat_id=$userid";
$result= mysqli_query($conn,$dltquery);
echo"<script>
alert('Deleted sucessfully');
window.location.href='categoryshow.php';
</script>"
?>