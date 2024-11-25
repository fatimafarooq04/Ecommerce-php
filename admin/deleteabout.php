<?php
require 'connection.php';
$ab_id = $_GET['dltid'];
//echo $userid
$dltquery = "DELETE FROM `abouttext` WHERE ab_id=$ab_id";
$result= mysqli_query($conn,$dltquery);
echo"<script>
alert('Deleted sucessfully');
window.location.href='showabout.php';
</script>"
?>