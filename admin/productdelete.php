<?php
require 'connection.php';
$userid = $_GET['dltid'];
//echo $userid
$dltquery = "DELETE FROM `product_items` WHERE id=$userid";
$result= mysqli_query($conn,$dltquery);
echo"<script>
alert('Deleted sucessfully');
window.location.href='productshow.php';
</script>"
?>