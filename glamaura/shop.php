

<!-- products -->
<?php
require "header.php";
include "connection.php";

if (isset($_GET["cid"])) {
    $catId = $_GET['cid'];
    $q = "SELECT * FROM `categories` WHERE cat_id = '$catId'";
} else {
    echo "Category ID is not set.";
    exit; // Exit the script if category ID is not set
}

$res = mysqli_query($conn, $q);

if (!$res) {
    die("Category query failed: " . mysqli_error($conn));
}

$data = mysqli_fetch_array($res);

?>




<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Our Shop</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">
                <?php echo $data['cat_name'] ?>
            </p>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Shop Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <!-- Shop Sidebar Start -->
        <div class="col-lg-3 col-md-12">
            <!-- Product Type Start -->
            <div class="border-bottom mb-4 pb-4">
                <h5 class="font-weight-semi-bold mb-4">Product Types</h5>
                <form action="shop.php" method="post">
                    <?php
                    $qu = "SELECT * FROM product_type WHERE cat_id='$catId'";
                    $result = mysqli_query($conn, $qu);

                    if (!$result) {
                        die("Product Type query failed: " . mysqli_error($conn));
                    }

                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <div class="mb-3">
                            <label>
                                <a href="shop.php?ptid=<?php echo $row['id']; ?>&cid=<?php echo $catId ?>">
                                    <?php echo $row["product_type"]; ?>
                                </a>
                            </label>
                        </div>
                        <?php
                    }
                    ?>
                </form>
            </div>
            <!-- Product Type End -->
        </div>
        <!-- Shop Sidebar End -->

        <!-- Shop Product Start -->
        <div class="col-lg-9 col-md-12">
            <div class="row pb-3">
                <div class="col-12 pb-1">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search by name">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-transparent text-primary">
                                        <i class="fa fa-search"></i>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <?php
                if (isset($_GET['ptid'])) {
                    $productTypeId = $_GET['ptid'];
                    $query = "SELECT p.id, p.name, p.image, p.price FROM product_items p
                              JOIN product_type pt ON p.product_type_id = pt.id
                              WHERE pt.id = '$productTypeId' AND pt.cat_id = '$catId'";
                } else {
                    $query = "SELECT p.id, p.name, p.image, p.price FROM product_items p
                              JOIN product_type pt ON p.product_type_id = pt.id
                              WHERE pt.cat_id = '$catId'";
                }

                $result = mysqli_query($conn, $query);


                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <form action="managecart.php" method="POST">
                            <div class="card product-item border-0 mb-4">
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>" />
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0" id="card1">
                                    <img class="img-fluid w-100" src="../admin/<?php echo $row["image"]; ?>"
                                        alt="<?php echo $row["name"]; ?>">
                                </div>
                                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                    <h6 class="text-truncate mb-3">
                            <input type="hidden" name="Item_Name" value="
                            <?php echo $row["name"]; ?>
                            "/>
                             <?php echo $row["name"]; ?>
                                    </h6>
                                    <div class="d-flex justify-content-center">
                                        <h6>
                            <input type="hidden" name="Price" value="
                            <?php echo $row["price"]; ?>
                            "/>

                                            <?php echo $row["price"]; ?>
                                        </h6>
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-between bg-light border">
                                    <a href="shopdetail.php?shop=<?php echo $row['id'] ?>"
                                        class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View
                                        Detail</a>
                                    <button type="submit" class="btn btn-sm text-dark p-0"  name="Add_To_Cart">
                                        <i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php

                }
                ?>

            </div>
        </div>
        <!-- Shop Product End -->
    </div>
</div>
<!-- Shop End -->

<?php
require "footer.php";
?>