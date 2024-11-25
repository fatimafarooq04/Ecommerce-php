<?php
require "connection.php";
if (isset($_POST['sub'])) {
$new_name = $_POST['new_name'];
$new_mail = $_POST['new_mail'];
// current date and time store in database signup form
$currentDateTime = date("Y-m-d H:i:s");

$Insert_qry="INSERT INTO `news`(`new_name`, `new_mail`, `new_register`) VALUES ('$new_name','$new_mail','$currentDateTime')";
$res= mysqli_query($conn,$Insert_qry);
echo "<script>
alert('Subscribe Successfully');
window.location.href='index.php';
</script> ";
}
?>