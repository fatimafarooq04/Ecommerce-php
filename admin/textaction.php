<?php
include "connection.php";
$head1=$_POST['head1'];
$para=$_POST['para'];
$head2=$_POST['head2'];
$address=$_POST['address'];
$email=$_POST['mail'];
$phone=$_POST['phone'];

$insert_qry= "INSERT INTO `contacttext`(`head_1`, `head_p`, `head_2`, `head_add`, `head_mail`, `head_num`) VALUES ('$head1','$para','$head2','$address','$email','$phone')";
$result = mysqli_query($conn,$insert_qry);
echo "<script>
alert('Information Added Successfully');
window.location.href='showtext.php';
</script> ";

?>


