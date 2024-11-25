<?php
require "header.php"
    ?>
<!-- add product form Start -->
<div class="container-fluid">
    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-8 col-lg-6 col-xl-6">
            <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <a href="index.html" class="">
                        <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Add products form</h3>
                    </a>

                </div>
                <form action="#" method='POST' enctype='multipart/form-data'>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="productname"name="productname">
                        <label for="floatingInput">product name</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="product description"
                            name="productdescription">
                        <label for="floatingPassword">product description</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="product price"
                            name="productprice">
                        <label for="floatingPassword">product price</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="file" class="form-control" id="floatingPassword" 
                            name="productimage" accept=".jpg, .jpeg, .png">
                    </div>
                   
                    <div class="form-floating mb-4">

                        <select class="form-select" aria-label="Default select example" name="category">
                            <?php
                            require "connection.php";
                            $qry = "SELECT * FROM `product_type`";
                            $res = mysqli_query($conn, $qry);

                            while ($opt = mysqli_fetch_assoc($res)) {

                                ?>

                                <option value="<?php echo $opt['id'] ?>">
                                    <?php echo $opt['product_type'] ?>
                                </option>

                                <?php

                            } ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="sub">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Sign In End -->

<?php
require "connection.php";

if (isset($_POST['sub'])) {
    $prodname = $_POST['productname'];
    $proddesc = $_POST['productdescription'];
    $prodprice = $_POST['productprice'];
    $product_type = $_POST['category'];
    $img = $_FILES['productimage'];

    $imagename = $img['name'];
    $actualpath = $img['tmp_name'];
    $mypath = "productimages/" . $imagename;

    // Check if the file extension is allowed
    $allowedExtensions = ['jpg', 'jpeg', 'png'];
    $fileExtension = strtolower(pathinfo($imagename, PATHINFO_EXTENSION));

    if (in_array($fileExtension, $allowedExtensions)) {
        move_uploaded_file($actualpath, $mypath);

        // Execute the SQL query
        $Insert_qry = "INSERT INTO `product_items`(`name`, `price`, `description`,  `image`, `product_type_id`) VALUES ('$prodname', '$prodprice','$proddesc',  '$mypath', $product_type)";

        $res = mysqli_query($conn, $Insert_qry);

        if ($res) {
            echo "<script>
                alert('Added Successfully');
                window.location.href='productadd.php';
            </script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "<script>
            alert('Sorry, only JPG, JPEG, and PNG files are allowed.');
            window.location.href='productadd.php';
        </script>";
    }
}
?>




<?php
require "footer.php"

?>