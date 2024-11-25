<?php
require "connection.php";

if (isset($_POST['sub'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $useremail = $_POST['email'];
    $userpassword = $_POST['password'];
    $userrole = $_POST['userrole'];
    
    // Validate image file type
    $img = $_FILES['img'];
    $imagename = $img['name'];
    $actualpath = $img['tmp_name'];
    $mypath = "img/" . $imagename;
    
    // Check if the file extension is allowed
    $allowedExtensions = ['jpg', 'jpeg', 'png'];
    $fileExtension = strtolower(pathinfo($imagename, PATHINFO_EXTENSION));

    if (in_array($fileExtension, $allowedExtensions)) {
        move_uploaded_file($actualpath, $mypath);

        $Insert_qry = "INSERT INTO `admin`(`firstname`, `lastname`, `email`, `password`, `userrole`, `userimage`) VALUES ('$firstname','$lastname','$useremail','$userpassword','$userrole','$mypath')";
        $res = mysqli_query($conn, $Insert_qry);

        if ($res) {
            echo "<script>
                alert('Added Successfully');
                window.location.href='login.php';
            </script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "<script>
            alert('Sorry, only JPG, JPEG, and PNG files are allowed.');
            window.location.href='signup.php';
        </script>";
    }
}
?>
