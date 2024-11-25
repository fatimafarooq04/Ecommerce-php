<?php
include "connection.php";
$head1=$_POST['head1'];
$para1=$_POST['para1'];
$head2=$_POST['head2'];
$para2=$_POST['para2'];
$point1=$_POST['point1'];
$point2=$_POST['point2'];
$point3=$_POST['point3'];
$point4=$_POST['point4'];
$head3=$_POST['head3'];
$para3=$_POST['para3'];

$insert_qry= "INSERT INTO `abouttext`(`ab_head1`, `ab_para1`, `ab_head2`, `ab_para2`, `ab_point1`, `ab_point2`, `ab_point3`, `ab_point4`, `ab_head3`, `ab_para3`) VALUES ('$head1','$para1','$head2','$para2','$point1','$point2','$point3','$point4','$head3','$para3')";
$result = mysqli_query($conn,$insert_qry);
echo "<script>
alert('Information Added Successfully');
window.location.href='showabout.php';
</script> ";

?>


