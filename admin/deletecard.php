<?php
require 'connection.php';
$c_id = $_GET['dltid'];
//echo $userid
$dltquery = "DELETE FROM `h_card` WHERE c_id=$c_id";
$result= mysqli_query($conn,$dltquery);
echo"<script>
alert('Deleted sucessfully');
window.location.href='showcard.php';
</script>"
?>