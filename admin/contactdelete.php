<?php
require 'connection.php';
$con_id = $_GET['dltid'];
//echo $userid
$dltquery = "DELETE FROM `feedback` WHERE con_id=$con_id";
$result= mysqli_query($conn,$dltquery);
echo"<script>
alert('Deleted sucessfully');
window.location.href='showcontact.php';
</script>"
?>