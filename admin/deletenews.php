<?php
require 'connection.php';
$new_id = $_GET['dltid'];
//echo $userid
$dltquery = "DELETE FROM `news` WHERE new_id=$new_id";
$result= mysqli_query($conn,$dltquery);
echo"<script>
alert('Deleted sucessfully');
window.location.href='shownews.php';
</script>"
?>