<?php
require 'connection.php';
$s_id = $_GET['dltid'];
//echo $userid
$dltquery = "DELETE FROM `homeservice` WHERE s_id=$s_id";
$result= mysqli_query($conn,$dltquery);
echo"<script>
alert('Deleted sucessfully');
window.location.href='showservice.php';
</script>"
?>