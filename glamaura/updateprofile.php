<?php
require_once "header.php";
require "connection.php";

// Check if user_id is set in the session
if (isset($_SESSION['id'])) {
    // Cast to integer to prevent SQL injection
    $user_id = (int)$_SESSION['id'];

    // Fetch user information only if user_id is not empty
    if (!empty($user_id)) {

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch user information
        $sql = "SELECT `id`, `firstname`, `lastname`, `email`, `password`, `userrole`, `userimage`, `registration_date` FROM `admin` WHERE id = $user_id";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // Display user information
            $id = $row['id'];
            $first_name = $row['firstname'];
            $last_name = $row['lastname'];
            $email = $row['email'];
            $password = $row['password'];
            $user_role = $row['userrole'];
            $user_image = $row['userimage'];
            $registration_date = $row['registration_date'];

        } else {
            echo "User not found";
            exit();
        }
    } else {
        echo "User ID is empty";
        exit();
    }
} else {
    echo "User ID not set in the session";
    exit();
}
?>

<div class="container mt-5">
    <div class="row justify-content-center align-items-center ms-5">
        <div class="col-md-4 text-center mb-4">
            <img src="<?php echo "img/" . basename($user_image); ?>" class="img-fluid rounded-start" alt="User Image" style="margin-top: 20px;">
        </div>
        <div class="col-md-8">
            <div class="card" style="max-width: 540px; border: none;">
                <div class="card-body">
                    <h5 class="card-title">Edit Profile</h5>
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="first_name" class="form-label">First Name:</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $first_name; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="last_name" class="form-label">Last Name:</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $last_name; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password" value="<?php echo $password; ?>" aria-describedby="passwordToggle">
                                <button class="btn btn-outline-secondary" type="button" id="passwordToggle" onclick="togglePassword()">👁️</button>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="user_image" class="form-label">Profile Image:</label>
                            <input type="file" class="form-control" id="user_image" name="user_image" accept=".jpg, .jpeg, .png">
                        </div>
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require "footer.php";
?>
<script>
    function togglePassword() {
        const passwordInput = document.getElementById("password");
        const passwordToggle = document.getElementById("passwordToggle");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            passwordToggle.innerHTML = "👁️";
        } else {
            passwordInput.type = "password";
            passwordToggle.innerHTML = "🔒";
        }
    }
</script>

<?php
// ... (previous code)

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get values from the form
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if a new image is uploaded
    if ($_FILES['user_image']['size'] > 0) {
        $user_image = $_FILES['user_image'];
        $temp_image = $user_image['tmp_name'];

        // Check if the file extension is allowed
        $allowedExtensions = ['jpg', 'jpeg', 'png'];
        $fileExtension = strtolower(pathinfo($user_image['name'], PATHINFO_EXTENSION));

        if (!in_array($fileExtension, $allowedExtensions)) {
            echo "<script>
                alert('Sorry, only JPG, JPEG, and PNG files are allowed.');
                window.location.href ='myprofile.php';
            </script>";
            exit; // Stop further execution
        }

        // Move the uploaded image to the desired directory
        $targetPath = "img/" . $user_image['name'];
        if (move_uploaded_file($temp_image, $targetPath)) {

            // Update the user's image in the database
            $updateImageQuery = "UPDATE `admin` SET `userimage` = '$targetPath' WHERE id = $user_id";
            if ($conn->query($updateImageQuery) === TRUE) {
                echo "Image uploaded and database updated successfully.";
            } else {
                echo "Error updating image in the database: " . $conn->error;
            }
        } else {
            echo "Error moving uploaded file to the destination directory.";
        }
    }

    // Update other user details
    $updateUserQuery = "UPDATE `admin` SET `firstname` = '$first_name', `lastname` = '$last_name', `email` = '$email', `password` = '$password' WHERE id = $user_id";
    if ($conn->query($updateUserQuery) === TRUE) {
        echo "User details updated successfully.";
    } else {
        echo "Error updating user details in the database: " . $conn->error;
    }

    echo "<script>
        alert('Update Successful');
        window.location.href ='myprofile.php';
        </script>";
    exit();
} else {
    // If the form is not submitted, redirect to the profile page
    // header("location: myprofile.php");
    exit();
}
?>