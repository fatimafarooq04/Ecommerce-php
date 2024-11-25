<?php
include "connection.php";

if (isset($_POST['sub'])) {
$name = $_POST['fullname'];
$email=$_POST['mail'];
$subject=$_POST['subj'];
$message=$_POST['msg'];

$insert_qry= "INSERT INTO `feedback`(`con_name`, `con_mail`, `con_sub`, `con_msg`) VALUES ('$name','$email','$subject','$message')";
$result = mysqli_query($conn,$insert_qry);
echo "<script>
alert('Your Message Has Been Delivered Successfully');
window.location.href='contact.php';
</script> ";

}
?>