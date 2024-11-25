<?php
include "connection.php";
$quality=$_POST['quality'];
$shipping=$_POST['shipping'];
$day=$_POST['day'];
$support=$_POST['support'];

$insert_qry= "INSERT INTO `homeservice`(`s_quality`, `s_shipping`, `s_day`, `s_support`) VALUES ('$quality','$shipping','$day','$support')";
$result = mysqli_query($conn,$insert_qry);
echo "<script>
alert('Information Added Successfully');
window.location.href='showservice.php';
</script> ";

?>


