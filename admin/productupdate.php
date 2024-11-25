<?php
require "header.php";
?>

<div class="container-fluid">
    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-8 col-lg-6 col-xl-6">
            <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <a href="index.html" class="">
                        <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Update Product Form</h3>
                    </a>
                </div>
                <div class="form-floating mb-3">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        <?php
                        require "connection.php";
                        $prodid = $_GET['updid'];
                        $updqry = "SELECT * FROM `product_items` WHERE id= $prodid";
                        $result = mysqli_query($conn, $updqry);

                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <input type="text" name="name" class="form-control" value="<?php echo $row['name'] ?>" placeholder="Enter product Name" class="form-input"><br>

                            <input type="text" name="desc" class="form-control" value="<?php echo $row['description'] ?>" placeholder="Enter description" class="form-input"><br>

                            <input type="text" name="price" class="form-control" value="<?php echo $row['price'] ?>" placeholder="Enter product price" class="form-input"><br>

                            <!-- Display current image -->
                            <?php
                            $currentImage = $row['image'];
                            if (!empty($currentImage)) {
                                echo '<img src="' . $currentImage . '" alt="Current Image" style="max-width: 200px; max-height: 200px; margin-bottom: 10px;">';
                            }
                            ?>

                            <!-- Allow user to upload a new image -->
                            <input type="file" name="image" class="form-control" accept=".jpg, .jpeg, .png"><br>

                            <div class="form-floating mb-4">
                                <select class="form-select" aria-label="Default select example" name="category">
                                    <?php
                                    require "connection.php";
                                    $qry = "SELECT * FROM `product_type`";
                                    $res = mysqli_query($conn, $qry);

                                    while ($opt = mysqli_fetch_assoc($res)) {
                                        $selected = ($opt['id'] == $row['product_type_id']) ? 'selected' : '';

                                        ?>
                                        <option value="<?php echo $opt['id'] ?>" <?php echo $selected ?>>
                                            <?php echo $opt['product_type'] ?>
                                        </option>
                                        <?php

                                    } ?>
                                </select>
                            </div>

                            <button type="submit" name="upd" class="btn-update btn btn-primary py-3 w-100 mb-4"> Update</button>

                            <?php
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST['upd'])) {
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];
    $product_type_id = $_POST['category'];

    // Check if a new image is uploaded
    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image'];
        $imagename = $image['name'];
        $actualpath = $image['tmp_name'];
        $mypath = "productimages/" . $imagename;

        // Check if the file extension is allowed
        $allowedExtensions = ['jpg', 'jpeg', 'png'];
        $fileExtension = strtolower(pathinfo($imagename, PATHINFO_EXTENSION));

        if (in_array($fileExtension, $allowedExtensions)) {
            move_uploaded_file($actualpath, $mypath);

            // Update the image path in the database only if a new image is uploaded
            $upd_qry = "UPDATE `product_items` SET `name`='$name', `description`='$desc', `image`='$mypath', `price`='$price', `product_type_id`='$product_type_id' WHERE id=$prodid";
        } else {
            echo "<script>
                alert('Sorry, only JPG, JPEG, and PNG files are allowed.');
                window.location.href ='productshow.php';
            </script>";
            exit; // Stop further execution
        }
    } else {
        // Update without changing the image
        $upd_qry = "UPDATE `product_items` SET `name`='$name', `description`='$desc', `price`='$price', `product_type_id`='$product_type_id' WHERE id=$prodid";
    }

    $result = mysqli_query($conn, $upd_qry);

    if (!$result) {
        echo "Error: " . mysqli_error($conn);
    } else {
        echo "<script>
        alert('Update Successful');
        window.location.href ='productshow.php';
        </script>";
    }
}
?>


<?php
require "footer.php";
?>
