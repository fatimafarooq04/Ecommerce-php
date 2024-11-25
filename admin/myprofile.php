<?php
require_once "header.php";
require "connection.php";

// Check if user_id is set in the session
if (isset($_SESSION['user_id'])) {
    // Cast to integer to prevent SQL injection
    $user_id = (int)$_SESSION['user_id'];

    // Connect to the database
    $conn = new mysqli($servername, $username, $password, $dbname);

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

        // Close the database connection
        $conn->close();

        // Check if the image file exists
        $imagePath = "img/" . $user_image;
        if (!file_exists($imagePath)) {
            echo "Image file not found: $imagePath";
            exit();
        }
    } else {
        echo "User not found";
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
            <img src="<?php echo $imagePath; ?>" class="img-fluid rounded-start" alt="User Image" style="margin-top: 20px;">
        </div>
        <div class="col-md-8">
            <div class="card" style="max-width: 540px; border: none;">
                <div class="card-body">
                    <h5 class="card-title">Admin Dashboard - My Profile</h5>
                    <p>First Name: <?php echo $first_name; ?></p>
                    <p>Last Name: <?php echo $last_name; ?></p>
                    <p>Email: <?php echo $email; ?></p>
                    <p>Password: <?php echo $password; ?></p>
                    <p>User Role: <?php echo $user_role; ?></p>
                    <p>Registration Date: <?php echo $registration_date; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require "footer.php";
?>
