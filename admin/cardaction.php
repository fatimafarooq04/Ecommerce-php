<?php
include "connection.php";

if (isset($_POST['sub'])) {
    $c_img = $_FILES['img'];
    $imagename = $c_img['name'];
    $file_extension = strtolower(pathinfo($imagename, PATHINFO_EXTENSION)); // Get the file extension

    // Check if the uploaded file type is allowed
    if ($file_extension != "jpg" && $file_extension != "jpeg" && $file_extension != "png") {
        echo "<script>alert('Only JPG, JPEG, and PNG files are allowed. Please upload a valid image file.'); window.location.href='addcard.php';</script>";
        exit(); // Stop further execution
    }

    $actualpath = $c_img['tmp_name'];
    $mypath = "cardimg/" . $imagename;

    // Move the uploaded file to the desired location
    move_uploaded_file($actualpath, $mypath);

    $text = $_POST['text'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];

    // Insert the data into the database
    $insert_qry = "INSERT INTO `h_card`(`c_img`, `c_text`, `c_price`, `c_desc`) VALUES ('$mypath','$text','$price','$desc')";
    $result = mysqli_query($conn, $insert_qry);

    // Redirect to the desired page after successful insertion
    echo "<script>alert('Information Added Successfully'); window.location.href='showcard.php';</script>";
}
?>
